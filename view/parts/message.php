<?php
if (!empty($_SESSION['sucesso'])) {
    if ($_SESSION['sucesso'] == 'S') {
        ?>
        <script type="text/javascript">
        swal("Pronto!", "Alterações gravadas com sucesso!", "success");
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
        swal("Erro!", "Não foi possível salvar as alterações!", "error");
        </script>
        <?php
    }
    unset($_SESSION['sucesso']);
}
?>