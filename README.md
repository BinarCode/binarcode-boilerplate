# Who Should Read This?

Before joining the project you should read this if you are in these groups:

- **Frontend Developers**
- **Backend Developers**
- **Full-stack Developers**
- **DevOps Engineers**
- **QA Engineers**
- **Project Managers/Leads**

This documentation serves as a roadmap for smooth collaboration, high-quality work, and efficient progress for all members of the team.

# Motivation

Our software development practices are based on principles of [Continuous Delivery](https://dora.dev/devops-capabilities/technical/continuous-delivery/), as highlighted in the DORA research ([DORA Research Program](https://services.google.com/fh/files/misc/dora_research_program.pdf)) and advocated in the book [Accelerate](https://www.amazon.com/Accelerate-Software-Performing-Technology-Organizations/dp/1942788339). 

DevOps Research and Assessment (DORA), a six-year research program, along with the insights from the book "Accelerate", have shed light on the practices that high-performing software teams adopt. Here are the key findings condensed into a more readable form:

- **Small Batch Sizes & Frequent Code Deployments**: High-performing teams often deliver work in small batches and deploy code frequently.

- **Trunk-Based Development**: High performers consistently employ this practice, leading to better overall performance.

- **Continuous Delivery Impact**: Teams practicing Continuous Delivery, including comprehensive configuration management, automated testing, and deployment, experience lower change failure rates and faster recovery times.

- **Culture & Collaboration**: A culture promoting information sharing, trust, and collaboration correlates with better software delivery performance and reduced burnout.

- **Performance & Competitive Advantage**: Effective software delivery and operational practices can drive profitability, productivity, customer satisfaction, and overall competitive advantage.

These insights guide our team's development practices, striving for continuous improvement and high performance.

## Github Rules

The purpose of these guidelines is to create a clean, streamlined, and efficient process for collaboration to build and deliver quality software. 

### Branching

We follow a [Trunk Based Development](https://cloud.google.com/architecture/devops/devops-tech-trunk-based-development) model, which is a critical practice in Continuous Delivery and entails:

- All developers work on a single branch named `main`.
- New features, bug fixes, or any other changes are made in short-lived feature branches which are branched off of `main`.
- These feature branches should be merged back into `main` as soon as possible to avoid long-lived branches that may cause merge conflicts and diverging code bases.

### Pull Requests (PRs)

- The number of open PRs should be kept small to ensure prompt review and feedback.
- A PR should be related to only one feature or bugfix. This makes it easier to review and understand the changes.
- Code reviews are mandatory. Each PR must be reviewed by at least one other developer before it can be merged.
- Please ensure to write a clear and concise PR description explaining the changes and the reason for them.

### Commits

- Commit messages should be clear and descriptive, outlining what was changed and why.
- We follow the "one commit per logical change" rule. If a commit includes several changes that aren't related, it would be hard to understand what the commit is about.

### Naming Conventions

- Branch names should be concise, descriptive and reflect the task at hand, e.g., `feature/login-system`, `bugfix/password-reset`.

---

## Continuous Delivery

In line with the practices of Continuous Delivery, any code that is merged into the `main` branch should be deployable. Our team ensures that deployment to production happens automatically whenever code is merged into `main`. 

To ensure the reliability and stability of the `main` branch, we have a set of CI/CD pipeline checks that must be passed before any code can be merged. These checks are implemented as GitHub Actions and include:

- Unit & Feature Tests: These ensure that the individual units of your code and their interactions are working as expected.
- Static Analysis (Larastan): Larastan is used to perform static analysis of the PHP code to detect errors without actually running the code.
- E2E Tests: If any end-to-end tests exist, they must be passed to ensure the system works together as a whole.
- TSLint Check: TSLint is used to ensure that the frontend TypeScript code adheres to a consistent style and does not contain any errors or issues.

## Getting Started

After cloning the project, follow the below steps to setup the environment:

### 1. Backend Setup:

Assuming you have composer and PHP installed in your environment, navigate to the project's directory and run:

```bash
composer install
cp .env.example .env
php artisan key:generate
```
Make sure to setup the correct DB connections and other required .env parameters.

Then run the migrations:
```bash
php artisan migrate
```
And finally, start the server:
```bash
php artisan serve
```

### 2. Frontend Setup:

Assuming you have Node.js and npm installed, navigate to the project's directory and run:

```bash
npm install
```

Then, compile and hot-reload for development:

```bash
npm run serve
```
---
## Running the Tests

(Instructions on how to run tests)

---

Our project follows industry best practices in terms of coding standards and software development lifecycle processes. By aligning our processes with the DORA research findings and the guidelines of "Accelerate", we strive to achieve high performance in software delivery and maintain a high degree of quality in our codebase. All contributions are greatly appreciated, and we look forward to collaborating with you. Happy Coding!
