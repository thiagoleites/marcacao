  <section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <h1 class="title">
              Lista de Pacientes
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
          Lista de pacientes recentes
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
                  <th></th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Data Nascimento</th>
                  <!-- <th>Progress</th> -->
                  <th>Data do cadastro</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $TodosPacientes = $pacientes->allPacientes();
                foreach ($TodosPacientes as $p) {
                ?>
                  <tr>
                    <td class="is-image-cell">
                      <div class="image">
                        <img src="https://avatars.dicebear.com/v2/initials/<?= $p['nome_p']; ?>.svg" class="is-rounded">
                      </div>
                    </td>
                    <td data-label="Name"><?= $p['nome_p']; ?></td>
                    <td data-label="Company"><?= $p['cpf_p']; ?></td>
                    <td data-label="City"><?= $p['nasc_p']; ?></td>
                    <td data-label="Created">
                      <small class="has-text-grey is-abbr-like" title="Oct 25, 2020">Oct 25, 2020</small>
                    </td>
                    <td class="is-actions-cell">
                      <div class="buttons is-right">
                        <button class="button is-small is-primary" type="button">
                          <span class="icon"><i class="mdi mdi-eye"></i></span>
                        </button>
                        <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                          <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                        </button>
                      </div>
                    </td>
                  </tr>
                <?php
                }
                ?>
                <!--EndPacientes-->
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