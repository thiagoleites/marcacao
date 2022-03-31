  <section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <h1 class="title">
              Lista de exames disponiveis
            </h1>
          </div>
        </div>
        <div class="level-right" style="display: none;">
          <div class="level-item"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section is-main-section">

    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clients
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
              <thead>
                <tr>
                  <th class="is-checkbox-cell">
                    <label class="b-checkbox checkbox">

                      <span class="check">#</span>
                    </label>
                  </th>
                  <th></th>
                  <th>Nome</th>
                  <th>Código</th>
                  <th>Tipo</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                <!--/Inicio da tabela-->
                <tr>
                  <?php
                  foreach ($exames->retornaExame() as $ex) {
                  ?>
                    <td class="is-checkbox-cell">
                      <label class="b-checkbox checkbox">
                        <!-- <input type="checkbox" value="false"> -->
                        <span class="check"><?= $ex['id_e']; ?></span>
                      </label>
                    </td>
                    <td class="is-image-cell">
                      <div class="image">
                        <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="is-rounded">
                      </div>
                    </td>
                    <td data-label="Name"><?= $ex['nome_e']; ?></td>
                    <td data-label="Company"><?= $ex['codigo_e']; ?></td>
                    <td data-label="City"><?= $ex['tipo_e']; ?></td>
                    <td class="is-actions-cell">
                      <div class="buttons is-right">

                        <a href="dashboard.php?pagina=exames/update&create=true&exameid=<?= $ex['id_e']; ?>" class="button">
                          <span class="icon"><i class="mdi mdi-eye"></i></span>
                        </a>
                        <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                          <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                        </button>
                      </div>
                    </td>
                </tr>
              <?php }
              ?>
              <!--Fim da tabela-->
              </tbody>
            </table>
          </div>
          <div class="notification">
            <div class="level">
              <div class="level-left">
                <div class="level-item">
                  <div class="buttons has-addons">
                    <button type="button" class="button is-active">1</button>
                    <button type="button" class="button">2</button>
                    <button type="button" class="button">3</button>
                  </div>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <small>Página 1 de 3</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>