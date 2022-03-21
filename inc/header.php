<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Marcacao Online</title>

  <!-- Bulma is included -->
  <link rel="stylesheet" href="css/main.min.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="app">
    <nav id="navbar-main" class="navbar is-fixed-top">
      <div class="navbar-brand">
        <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
          <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>
        <div class="navbar-item has-control">
          <div class="control"><input placeholder="Pesquisar qualquer coisa" class="input"></div>
        </div>
      </div>
      <div class="navbar-brand is-right">
        <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
          <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
        </a>
      </div>
      <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">

          </div>
          <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
            <a class="navbar-link is-arrowless">
              <div class="is-user-avatar">
                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
              </div>
              <div class="is-user-name"><span>Thiago Leite</span></div>
              <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
            </a>
            <div class="navbar-dropdown">
              <a href="profile.html" class="navbar-item">
                <span class="icon"><i class="mdi mdi-account"></i></span>
                <span>meu perfil</span>
              </a>
              <a class="navbar-item">
                <span class="icon"><i class="mdi mdi-settings"></i></span>
                <span>config</span>
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                <span class="icon"><i class="mdi mdi-logout"></i></span>
                <span>sair</span>
              </a>
            </div>
          </div>
          <a href="https://justboil.me/bulma-admin-template/one-html" title="About" class="navbar-item has-divider is-desktop-icon-only">
            <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
            <span>Sobre</span>
          </a>
          <a title="Log out" class="navbar-item is-desktop-icon-only">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log out</span>
          </a>
        </div>
      </div>
    </nav>
    <aside class="aside is-placed-left is-expanded">
      <div class="aside-tools">
        <div class="aside-tools-label">
          <span><b>Marcação</b> On-Line</span>
        </div>
      </div>
      <div class="menu is-menu-main">
        <p class="menu-label">Geral</p>
        <ul class="menu-list">
          <li>
            <a href="dashboard.php" class="router-link-active has-icon">
              <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
              <span class="menu-item-label">Dashboard</span>
            </a>
          </li>
        </ul>
        <p class="menu-label">Menu</p>
        <ul class="menu-list">
          <li>
            <a href="dashboard.php?pagina=tabelas/index" class="has-icon">
              <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span>
              <span class="menu-item-label">Tabelas</span>
            </a>
          </li>
          <li>
            <a href="dashboard.php?pagina=formularios/index" class="has-icon">
              <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
              <span class="menu-item-label">Formularios</span>
            </a>
          </li>
          <li>
            <a href="dashboard.php?pagina=perfil/index" class="has-icon">
              <span class="icon"><i class="mdi mdi-account-circle"></i></span>
              <span class="menu-item-label">Perfil</span>
            </a>
          </li>
          <li>
            <a class="has-icon has-dropdown-icon">
              <span class="icon"><i class="mdi mdi-view-list"></i></span>
              <span class="menu-item-label">Exames</span>
              <div class="dropdown-icon">
                <span class="icon"><i class="mdi mdi-plus"></i></span>
              </div>
            </a>
            <ul>
              <li>
                <a href="dashboard.php?pagina=exames/create">
                  <span>Novo</span>
                </a>
              </li>
              <li>
                <a href="dashboard.php?pagina=exames/index">
                  <span>Exibir</span>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a class="has-icon has-dropdown-icon">
              <span class="icon"><i class="mdi mdi-view-list"></i></span>
              <span class="menu-item-label">Pacientes</span>
              <div class="dropdown-icon">
                <span class="icon"><i class="mdi mdi-plus"></i></span>
              </div>
            </a>
            <ul>
              <li>
                <a href="dashboard.php?pagina=pacientes/create">
                  <span>Cadastrar</span>
                </a>
              </li>
              <li>
                <a href="dashboard.php?pagina=pacientes/index">
                  <span>Exibir</span>
                </a>
              </li>
            </ul>
          </li>


        </ul>
        <p class="menu-label">Sobre</p>
        <ul class="menu-list">
          <li>
            <a href="https://justboil.me/bulma-admin-template/one-html" class="has-icon">
              <span class="icon"><i class="mdi mdi-help-circle"></i></span>
              <span class="menu-item-label">Sobre</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <section class="section is-title-bar">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <ul>
              <li>Dashboard</li>
              <li>Painel</li>
            </ul>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <div class="buttons is-right">
              <a href="dashboard.php" class="button is-primary" disabled>
                <span class="icon"><i class="mdi mdi-calendar-weekend"></i></span>
                <span>Data de hoje: <?= date("d.m.Y"); ?></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="hero is-hero-bar">
      <div class="hero-body">
        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <h1 class="title">
                Dashboard
              </h1>
            </div>
          </div>
          <div class="level-right" style="display: none;">
            <div class="level-item"></div>
          </div>
        </div>
      </div>
    </section> -->