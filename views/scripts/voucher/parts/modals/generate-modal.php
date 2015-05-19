<div id="generate" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body-content">
                <h3>New Token Series</h3>
                <div class="row">
                    <div class="col col-sm-8">
                        <table class="table current-data table-only-body">
                            <tbody>
                            <? foreach ($this->settings as $name => $setting) { ?>
                                <tr>
                                    <td><?= $name ?></td>
                                    <td>
                                        <? if (is_numeric($setting)) {
                                            echo number_format($setting, 0, ',', ' ');
                                        } else {
                                            echo $setting;
                                        } ?>
                                    </td>
                                </tr>
                            <? } ?>
                            </tbody>
                        </table>
                        <? if ($this->generateWarning) { ?>
                            <div class="alert alert-danger"><?= $this->generateWarning ?></div>
                        <? } ?>
                    </div>
                </div>
            </div>
            <!-- dialog buttons -->
            <div class="modal-footer">
                <? // TODO correct URL !?>
                <a href="/plugin/OnlineShop/voucher/generate?id=<?= $this->getParam('id') ?>" class="btn btn-primary js-loading" data-msg="Generating Codes, please wait. This can take some minutes.">Generate</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
