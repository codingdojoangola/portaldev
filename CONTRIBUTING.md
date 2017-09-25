# Portal Dev :angola:

## Contributing to portaldev

:cake: First off, thanks for taking you precious time to contribute. :+1:
The following is a set of guidelines for Contributing to **Coding dojo Angola** and it's projects/apps, which are in the [Coding dojo Angola](https://github.com/codingdojoangola) on Github. These are just guidelines, not rules. Use your best judgement, and feel free to propose changes to this document in a **Pull Request**.

## Table of contents
[What to know before?](#getting-started)
 * [How?](#how)
 * [Pull Requests](#pull-requests)
 * [Commits](#git-commit)




### Getting started
Contributions are always welcome and will be fully **credited**.

We accept contributions via **Pull Requests** via [Github](https://github.com/codingdojoangola/portaldev) and/or tests in our [portaldev webapp](https://portaldev.herokuapp.com).

Search if the issue/bug you are trying to resolve wasn't already solved... Try to search issues in :muscle: [#wontfix](https://github.com/codingdojoangola/portaldev/issues?q=is%3Aopen+is%3Aissue+label%3ajuda) label or :bug: [#bug](https://github.com/doesangueorg/doesangue-core/issues?q=is%3Aopen+is%3Aissue+label%3Abug). If you prefer to search for *Pull Requests* check :muscle: [#wontfix](https://github.com/codingdojoangola/portaldev/issues?q=is%3Aopen+is%3Apr+label%3Awontfix).

If you get a new idea or want to add a new feature please before you create a new Pull Requests open an [Issue](https://github.com/codingdojoangola/portaldev/issues/new) talking about it.

#### How?
* 1 Fork the project.
* 2 Create your bugfix/feature branch and your (commented) code.

**Note**: Consider to naming your branch based on feature you'll work. Like in example:

```
git checkout -b my-new-feature develop
```

 where development is the branch where the **my-new-feature** will be based.

* 3 Create unit tests for your feature/code:
* 3.1 Run ``php artisan make:test --unit ClassnameTest`` (don't forget the Test suffix) and write your test inside the class.
* 3.2 Run ``vendor/bin/phpunit`` to make sure everything works as well (new and old tests).
* 4 Commit your changes (your feature and tests) and push to your branch.
* 5 Run the following to make sure your fork is updated with our latest changes.

```
git remote add upstream git@github.com:codingdojoangola/portaldev.git
git checkout develop
git pull upstream develop
```
Then update your feature branch from your local copy of develop, and push it!

```
git checkout my-new-feature
git rebase develop
git push --set-upstream origin my-new-feature
```

Finally, go to Github and make a [Pull Request](https://help.github.com/articles/creating-a-pull-request) :cake: :cake: :cake:


#### Pull Requests
* Use the [PSR-2 Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md). The easiest way to apply the conventions is to install the [PHP Code Sniffer](http://pear.php.net/package/PHP_CodeSniffer).

* **Add tests**! Your pull request won't be accepted if it doesn't have tests (or if it doesn't passes). 
* **Document any change in behavior**. Make sure the **README.md** and any other relevant documentation are kept up-to-date.
* Don't worry about updating CHANGELOG.md. The package administrator will handle updating those when new releases are created.

### Styleguide
**Note**: More details about styleguide needed here.

#### Git Commit Messages

* Use the present tense ("Add feature" not "Added feature")
* Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
* Limit the first line to 72 characters or less
* Reference issues and pull requests liberally
* When only changing documentation, include [ci skip] in the commit description

* Consider starting the commit message with an applicable emoji:

| Emoji | Code | Description
-----|----|---
:art:| ``:art:`` | when improving the format/structure of the code
:racehorse:| ``:racehorse:`` |when improving performance
:memo:| ``:memo:`` |when writing docs
:muscle: |``:muscle:``| when adding new features/functions
:bug: |``:bug:``| when fixing a bug
:fire: | ``:fire:``| when removing code or files
:green_heart: |``:green_heart:``| when fixing the CI build
:white_check_mark: |``:white_check_mark:``| when adding tests
:lock: |``:lock:``| when dealing with security
:arrow_up: |``:arrow_up:``| when upgrading dependencies
:arrow_down: |``:arrow_down:``| when downgrading dependencies
:shirt: |``:shirt:``| when removing linter warnings


### TO-DO
* Add the styleguide.
* Add the Pull Requests and Issue templates
* Add environment/dev requirements


#### Chat
if you prefer to open a chat with other members/developers join us on Gitter and/or Slack.

* Slack [Invite yourself :anchor:](https://codingdojoangola.now.sh/) or if you are already a member just go to [Slack](https://codingdojoangola.slack.com)

[Back to top](#contributing-to-portaldev)
