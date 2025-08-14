pipeline {
    agent any

    environment {
        DOCKERHUB_CREDENTIALS = credentials('c573c1a6-585d-41f8-8e1d-4e9ecf78f813') // Jenkins credentials ID
        IMAGE_NAME = "mythryee/portfolio:v1"
    }

    stages {

        stage('Build Docker Image') {
            steps {
                script {
                    echo "Building Docker image..."
                    sh "docker build -t ${IMAGE_NAME}:latest ."
                }
            }
        }

        stage('Push to Docker Hub') {
            steps {
                script {
                    echo "Logging in and pushing image..."
                    sh """
                        echo ${DOCKERHUB_CREDENTIALS_PSW} | docker login -u ${DOCKERHUB_CREDENTIALS_USR} --password-stdin
                        docker push ${IMAGE_NAME}:latest
                    """
                }
            }
        }

        stage('Deploy to Kubernetes') {
            steps {
                script {
                    echo "Deploying to Kubernetes..."
                    sh """
                        kubectl set image deployment/php-app php=${IMAGE_NAME}:latest
                        kubectl rollout status deployment/php-app
                    """
                }
            }
        }

        stage('Notifications') {
            steps {
                script {
                    // Email Notification
                    mail to: '22b01a4256@svecw.edu.in',
                         subject: "Jenkins Pipeline: ${currentBuild.currentResult}",
                         body: "Build and deployment status: ${currentBuild.currentResult}"

                    // Slack Notification (if configured)
                    // slackSend(channel: '#your-channel', message: "Pipeline status: ${currentBuild.currentResult}")
                }
            }
        }

    }

    post {
        success {
            echo "Pipeline succeeded!"
        }
        failure {
            echo "Pipeline failed!"
        }
    }
}
