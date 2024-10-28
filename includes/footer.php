</main>

<div class="toast" id="errorToast">
  <div class="toast-content">
    <i class="fas fa-solid fa-x toast-icon error"></i>
    <div class="message">
      <span class="text text-1"><?= translate("error", $i18n) ?></span>
      <span class="text text-2 errorMessage"></span>
    </div>
  </div>
  <i class="fa-solid fa-xmark close close-error"></i>
  <div class="progress error"></div>
</div>

<div class="toast" id="successToast">
  <div class="toast-content">
    <i class="fas fa-solid fa-check toast-icon success"></i>
    <div class="message">
      <span class="text text-1"><?= translate("success", $i18n) ?></span>
      <span class="text text-2 successMessage"></span>
    </div>
  </div>
  <i class="fa-solid fa-xmark close close-success"></i>
  <div class="progress success"></div>
</div>

<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="submate" data-description="Support me on Buy me a coffee!" data-message="Hi, I'm Chris. If you like Submate, you can now buy me a coffee ❤️" data-color="#5F7FFF" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

<?php
if (isset($db)) {
  $db->close();
}
?>

</body>

</html>