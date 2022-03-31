<?php
$exameData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$exameid = filter_input(INPUT_GET, 'exameid', FILTER_VALIDATE_INT);

if (isset($exameData['sendForm'])) {
  unset($exameData['sendForm']);
  $upDados = $exames->updateExame($exameid, $exameData);
  echo "
      <div class=\"notification is-success\">
        O Exame foi <strong>Atualizado</strong>
      </div>
  ";
}
$retornaDados = $exames->exameById($exameid);
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
                <input class="input" type="text" name="nome_e" placeholder="Digite o nome do exame" value="<?= $retornaDados->nome_e; ?>">
                <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
              </div>
              <p class="help is-danger">
                Não utilize acentos nem caracteres especiais.
              </p>
            </div>
            <div class="field">
              <p class="control is-expanded has-icons-left has-icons-right">
                <input class="input" type="text" name="codigo_e" placeholder="Digite o código para o exame" value="<?= $retornaDados->codigo_e; ?>">
                <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>

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
                    <option value="sem_contraste" <?= $retornaDados->tipo_e == 'sem_contraste' ? 'selected' : ''; ?>>Sem Constraste</option>
                    <option value="com_contraste" <?= $retornaDados->tipo_e == 'com_contraste' ? 'selected' : ''; ?>>Com Constraste</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field is-horizontal">
          <div class="field-label">

          </div>
          <div class="field-body">
            <div class="field">
              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" name="sendForm" class="button is-primary">
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