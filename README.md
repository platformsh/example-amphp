# Amp/Aerys Websocket example for Platform.sh

This project shows how to setup a simple chat server using Amp and the Aerys HTTP server library on Platform.sh.  It is very closely based on [this example](https://github.com/kelunik/demo-chat) by Niklas Keller.

## Starting a new project

To start a new project based on this template, follow these 3 simple steps:

1. Clone this repository locally.  You may optionally remove the `origin` remote or remove the `.git` directory and re-init the project if you want a clean history.

2. Create a new project through the Platform.sh user interface and select "Import an existing project" when prompted.

3. Run the provided Git commands to add a Platform.sh remote and push the code to the Platform.sh repository.

That's it!  Now visit your site in 2 separate browser windows and enter a chat name.  You'll be able to enter a message on one window and have the message immediately appear in the other.

## Using as a reference

You can also use this repository as a reference for your own projects, and borrow whatever code is needed. The most important parts are the `.platform.app.yaml` file and the `.platform` directory.
