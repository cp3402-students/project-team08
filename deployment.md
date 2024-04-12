# Project Deployment Workflow

## Overview
This document outlines the development and deployment workflow for our project. We utilise AWS Lightsail for hosting our live site, XAMPP for local development, and GitHub Actions for automated deployment.

## Development Environment Setup
1. **Local Development Setup:**
   - We each installed and configured XAMPP on our local machine and used this as a staging site. 
   - A useful video to help XAMPP for local WordPress development: [XAMPP WordPress Local setup](https://www.youtube.com/watch?v=XkKadPcPFT4&t=6s&ab_channel=GeekyScript)
   - A five server has also been set up to view the wordpress site locally, this is incorperated into VS code. 

2. **Version Control Setup:**
   - We each cloned the project repository from GitHub and set up Git locally for version control (our group used Visual Studio Code). 
   - Our Repository: [GitHub Repository](https://github.com/yourusername/yourrepository)

## Development Process
1. **Local Development Workflow:**
   - We would test changes to the theme locally through our local theme environment which we hosted using XAMPP. Before making these changes to the live site code we confirmed the changes with our group.
   

## Deployment Process
1. **GitHub Actions Setup:**
   - We configured GitHub Actions workflow for automated deployment, this process was triggered by pushes to the main branch.   
   - The "deploy.yml" file contains all configurations for github actions. 
   - The "secrets." function was used to encrypt the AWS SSH key, a tutorial on this funcion is attached below. 
  
   https://www.youtube.com/watch?v=WuWsg0Ldess 

2. **Testing Procedures:**
   - We tested the changes in the local theme environment to ensure compatability.
   
3. **Live Deployment:**
   - Once testing theme changes locally we eddited the live site code and promoted approved changes.

## Project Management
1. **Task Management:**
   - We used Trello to track tasks and make plans for meetings and task completion.
   
2. **Communication Channels:**
   - We primarily used Discord for all communication, but we also linked our GitHub to our [Slack Group Channel](https://itatjcu.slack.com/archives/G0PC1RR17) so all members are notified when a member commits changes.

## Automation
1. **Continuous Deployment with GitHub Actions:**
   - GitHub Actions workflow is triggered on push to the main branch, automating the deployment process to the live site.
   
## Troubleshooting
1. **Common Deployment Issues:**
   - When setting up GitHub Actions:
     - Ensure you have all appropriate permissions granted in AWS
     - Don't forget to add the SSH .pem key to GitHub Repository 
     - Ensure you include the correct file path location of the AWS theme file in [.github/workflows/deploy.yml]
   -  Originally the group was using Circles.CI between github and AWS lightsail, but due to compatibility issues, Circle CI was dropped from the project. 

## Conclusion
This document outlines our development and deployment workflow, ensuring a smooth process for updating the WordPress theme. By following these guidelines and utilising automation, we aim to streamline our development efforts and maintain a reliable live site.
