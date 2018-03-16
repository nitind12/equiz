<script src="<?PHP echo base_url() . 'nitnav/js/jquery-1.10.2.min.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'nitnav/js/bootstrap.min.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'nitnav/js/jquery.innerfade.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'nitnav/js/jquery.transit.min.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'nitnav/js/kdmm.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'nitnav/js/kdmm_2.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'nitnav/wheel/jquery.fortune.min.js';?>"></script>
<script src="<?PHP echo base_url() . 'nitnav/wheel/roulette.js';?>"></script>
<?php if (isset($jspage_)) { ?>
    <?php $this->load->view(''.$jspage_ . ''); ?>
<?php } ?>
</body>
</html>