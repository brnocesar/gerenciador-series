# sandbox-laravel-series

:brazil: Essa aplicação começou como _"fork"_ de um projeto desenvolvido enquanto acompanhava o curso de Laravel da ALura.

:uk: This application started as a "fork" from a learning project made following a course about Laravel at Alura.

:brazil: Durante o curso foi desenvolvido um sistema para gerenciar as séries que o usuário estivesse acompanhando, dessa forma ele poderia separar em temporadas e marcar episódios que já assistiu .

:uk: The application was deployed into Heroku and below you can see my steps to do this.

(*) A idéia é escrever o _readme_ em PT-BR e EN... isso vai ir aos poucos, mas vai (espero).

## How to deploy a Laravel application into Heroku

### 1. Installing Heroku CLI

The first to do is install a tool that allow us to menage our Heroku applications from command line interface.

From Heroku CLI [documentation](https://devcenter.heroku.com/articles/heroku-cli) we can see Git is required. If you're on a Linux distribution probably already has Git installed, if hasn't run the following command in terminal (or search for a more suitable one):

```terminal
sudo apt install git
```

Soon I hope write a guide/repository about Git. Also was needed to install _snap_ on my PC (Mint) before continue:

```terminal
sudo apt install snapd
```

And finally it's turn for Heroku:

```terminal
sudo snap install --classic heroku
```

Now you can finally login on Heroku running this command from terminal:

```terminal
heroku login
```

If a browser window appears just entry the credentials from your Heroku account.

In other hand, if you receive a warning from terminal saying this command is not defined or something like that, could be necessary set the `$PATH` variables for softwares installed from `snap`, add `export PATH=$PATH:/snap/bin` in the end of `~/.bashrc`:

```terminal
cd
nano .bashrc
```

After that try to login again.

### 2. Creating a project in Heroku

You can do this in two different ways:

1. **using the interface web**: Just access Heroku web page and look for a button `new` available in somewhere (it's really easy to find it), click on it then in `Create new app`.  
After been redirect to a new page, choose a unique name for your app and click on `Create app`.  
Then you will be sent to a page with "deploy instructions". Check if `Heroku Git` is the selected method and follow the instructions for you case.

2. **using the command line**:

### 3. General configuration

#### 3.1. Adding `heroku` remote

If your project already is a git repository the next to do is add `heroku` remote, so in your project  directory run the following command:

```terminal
heroku git:remote -a <unique-app-name>
```

#### 3.2. Setting environment variables

### 4. Database configuration
