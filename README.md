# DevOps Internship Task Report

## Overview
This document provides the steps taken to complete the DevOps internship task, along with the challenges faced and solutions implemented. The task involves containerizing a PHP application, pushing it to Docker Hub, deploying it using Docker Compose, and automating the workflow using Jenkins. Screenshots of key steps are provided for clarity.

---

## Steps Performed

### 1. Installing Git
- **Command**: `sudo apt-get install git -y`
- **Purpose**: To install Git for version control.
- **Result**: Git was successfully installed, enabling the cloning of repositories.
- **Screenshot**: Shows the successful installation of Git and repository cloning.
![image](https://github.com/user-attachments/assets/bc487dfa-c1a1-4d4a-8bd8-23410e88830f)

### 2. Cloning the Repository
- **Command**: `git clone https://github.com/silarhi/php-hello-world.git`
- **Purpose**: To fetch the PHP application from the GitHub repository.
- **Result**: Repository was cloned successfully, and files were available locally.
- **Screenshot**: Illustrates the cloning process.
![image](https://github.com/user-attachments/assets/b31bb936-878d-4ee2-9730-01fdb9ad56c5)

### 3. Writing and Running a Bash Script for Docker Installation
- **Script File**: `install_docker.sh`
- **Steps in Script**:
  1. Installed dependencies such as curl, apt-transport-https.
  2. Added Docker’s GPG key and repository.
  3. Installed Docker using apt.
- **Commands Used**:
  - `chmod +x install_docker.sh` to make the script executable.
  - `./install_docker.sh` to run the script.
- **Result**: Docker was installed successfully, verified by Docker version 27.4.1.
- **Screenshot**: Displays the installation logs of Docker.
![image](https://github.com/user-attachments/assets/20896360-faf9-4176-9388-809b717e47b7)

### 4. Creating and Using a Dockerfile
- **Purpose**: To containerize the PHP application.
- **Dockerfile Content**:
  - Used the base image `php:7.4-apache`.
  - Copied application files to `/var/www/html/`.
- **Command to Build Docker Image**: `sudo docker build -t php-hello-world .`
- **Result**: Docker image was built successfully.
- **Screenshot**: Shows creating a Dockerfile and the Docker image build logs.
![image](https://github.com/user-attachments/assets/16721b10-5d3e-409f-af8b-9bb383c1037b)
![image](https://github.com/user-attachments/assets/ed4a3031-88ce-481a-aef9-ae65bd9e2e94)

### 5. Running the Docker Container
- **Command**: `sudo docker run -d -p 8081:80 php-hello-world`
- **Purpose**: To deploy the PHP application in a container and map port 8081 to port 80.
- **Result**: The containerized application was accessible at `http://localhost:8081` and displayed "Hello, Solomon!. Let's Rock N Roll".
- **Screenshot**: Shows the application running successfully in the browser through `localhost:8081`.
![image](https://github.com/user-attachments/assets/e50bf5f4-25b9-43a8-ab00-a692a0dec8c4)
![image](https://github.com/user-attachments/assets/51ded677-ce2d-4bb0-a0be-c8e36957183c)

### 6. Pushing the Docker Image to Docker Hub
- **Commands**:
  1. `docker login`: Logged into Docker Hub.
  2. `docker tag php-hello-world solomon76/php-hello-world:latest`: Tagged the image.
  3. `docker push solomon76/php-hello-world:latest`: Uploaded the image to Docker Hub.
- **Result**: Image was successfully pushed to Docker Hub.
- **Screenshot**: Illustrates the image being pushed to Docker Hub.
![image](https://github.com/user-attachments/assets/955e75cd-22b9-4a38-9f65-f0f451b1d412)
![image](https://github.com/user-attachments/assets/58243c10-1261-4666-879e-db180055b915)

### 7. Installing Jenkins
- **Commands**:
  1. `sudo apt install jenkins`: Installed Jenkins.
  2. `sudo systemctl start jenkins`: Started the Jenkins service.
  3. `sudo systemctl status jenkins`: Verified Jenkins status.
- **Result**: Jenkins was installed successfully and configured to automate the build process.
- **Issue**: Faced an issue during installation but resolved it by restarting the daemon program.
  ![image](https://github.com/user-attachments/assets/2e0a9ab8-66d6-4c4a-bbc8-a8a8ae9a7a9b)

- **Screenshot**: Shows Jenkins status.
![image](https://github.com/user-attachments/assets/680c0a60-578d-43c8-a89a-b513959a53af)


### 8. Establishing Connection in Jenkins
- **Purpose**: To establish the connection between Jenkins and GitHub.
- **Steps**:
  1. Generated the key for Jenkins and GitHub.
  2. Passed the keys in Jenkins and GitHub.
  3. Obtained a token from GitHub and logged in with credentials.
  4. Logged in with Docker as well.
- **Result**: Connection established, and two credentials were added.
- **Screenshot**: Shows the admin login and credentials.
  ![image](https://github.com/user-attachments/assets/6d30421f-4332-4df4-b191-a4e37e5d02dc)
![image](https://github.com/user-attachments/assets/df1ff568-6866-40f2-9cde-070d31248305)


### 9. Adding a Project into Jenkins
- **Purpose**: To configure and build the project.
- **Steps**:
  1. Added a project through "New Item" and chose a freestyle project.
  ![image](https://github.com/user-attachments/assets/8c457b37-c796-4d63-99f1-781d596a89f0)
  2. Added the necessary code in the "Execute Shell" section.
  ![image](https://github.com/user-attachments/assets/ff75b0a1-1463-4977-b9cb-361ed13988b8)

  3. Saved the code and started to build.
  4. Achieved success on the 30th attempt after multiple failures.
- **Result**: The project was built successfully.
![image](https://github.com/user-attachments/assets/8ce2b54d-1c7d-4704-bdd8-a2653dc92ea4)

---

## Challenges Faced

### 1. Jenkins Installation and Configuration
- **Issue**: Service failed to start due to permission issues.
- **Solution**: Updated Jenkins service configuration and verified using `systemctl daemon-reload`.

### 2. GitHub Authentication
- **Issue**: Push commands failed due to deprecated password authentication.
- **Solution**: Configured SSH keys for secure authentication with GitHub.

---

## Repositories

- **Docker Hub**: [solomon76/php-hello-world](https://hub.docker.com/repository/docker/solomon76/php-hello-world/general)
- **GitHub**: [Azrael7667/intuji-devops-internship-challenge](https://github.com/Azrael7667/intuji-devops-internship-challenge)
