<section class="hero is-hero-bar">
  <div class="hero-body">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <h1 class="title">
            Cadastrar novo exame
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
  <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        <span class="icon"><i class="mdi mdi-ballot"></i></span>
        Formulário
      </p>
    </header>
    <div class="card-content">
      <form method="post" action="">
        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Nome/Cod</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control is-expanded has-icons-left">
                <input class="input" type="text" placeholder="Digite o nome do exame">
                <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
              </div>
              <p class="help is-danger">
                Não utilize acentos nem caracteres especiais.
              </p>
            </div>
            <div class="field">
              <p class="control is-expanded has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Digite o código para o exame">
                <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
                <!-- <span class="icon is-small is-right"><i class="mdi mdi-check"></i></span> -->
              </p>
            </div>
          </div>
        </div>
        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Tipo</label>
          </div>
          <div class="field-body">
            <div class="field is-narrow">
              <div class="control">
                <div class="select is-fullwidth">
                  <select>
                    <option disabled>Selecione a categoria</option>
                    <option>Com constraste</option>
                    <option>Sem Constraste</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field is-horizontal">
          <div class="field-label">
            <!-- Left empty for spacing -->
          </div>
          <div class="field-body">
            <div class="field">
              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-primary">
                    <span>Salvar</span>
                  </button>
                </div>
                <div class="control">
                  <button type="reset" class="button is-primary is-outlined">
                    <span>Limpar todos os campos</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
  </div>
</section>