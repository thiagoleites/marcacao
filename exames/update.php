<?php
$exameData = filter_input(INPUT_POST, FILTER_DEFAULT);
$exameid = filter_input(INPUT_GET, 'exameid', FILTER_VALIDATE_INT);

new Exames;
$exameAtual = new Exames;
$exameAtual = $exameAtual->retornaByIdExame($exameid);
$nome = $exameAtual['nome_e'];
$codigo = $exameAtual['codigo_e'];
$tipo = $exameAtual['tipo_e'];

if (isset($exameData['atualizaExame'])) {
  echo 'funcioona';
}



?>
<section class="hero is-hero-bar">
  <div class="hero-body">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <h1 class="title">
            Atualizar exame
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
                <input class="input" type="text" name="nome_e" placeholder="Digite o nome do exame" value="<?= $nome; ?>">
                <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
              </div>
              <p class="help is-danger">
                Não utilize acentos nem caracteres especiais.
              </p>
            </div>
            <div class="field">
              <p class="control is-expanded has-icons-left has-icons-right">
                <input class="input" type="text" name="codigo_e" placeholder="Digite o código para o exame" value="<?= $codigo; ?>">
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
                  <select name="tipo_e">
                    <option value="" disabled selected>Selecione a categoria</option>
                    <option value="com_contraste">Com constraste</option>
                    <option value="sem_constraste">Sem Constraste</option>
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
                  <button type="submit" name="atualizaExame" class="button is-primary">
                    <span>Salvar</span>
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