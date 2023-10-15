# Git Workflow

The Anti Grazer project follows a feature-branch workflow. This document outlines the process and conventions we adhere to.

## Table of Contents

- [Branching](#branching)
- [Naming Conventions](#naming-conventions)
- [Pull Requests](#pull-requests)
- [Code Review](#code-review)
- [Merging](#merging)
- [Releases](#releases)

## Branching

- The `main` branch is the central hub for all development.
- All feature development should occur in separate branches, branched off from `main`.

### Branch Types

- **Feature Branches**: For developing new features or enhancements.
- **Bugfix Branches**: For fixing bugs.
- **Hotfix Branches**: For urgent fixes to be applied to the production.

## Naming Conventions

- Branch names should be concise, descriptive, and follow a `type/description` format.
  - Example: `feature/user-authentication`

## Pull Requests

- Create a Pull Request (PR) against `main` once the work on your branch is complete.
- PR titles should be descriptive and follow a similar `type: description` format.
  - Example: `feature: User authentication`

## Code Review

- At least one team member should review the PR.
- Address any comments, and ensure all CI checks pass before merging.

## Merging

- Rebase and merge to keep a linear history.
- Ensure the branch commits are well-structured and the branch is up-to-date with `main` before merging.

## Releases

- Tag releases with a version number, following Semantic Versioning.
- Summarize the changes in the release, and link to relevant PRs and issues.

---

For any queries or further clarifications, feel free to reach out to the team or open an issue on GitHub.
