<div id="container">
    <div style ='margin:0 auto; text-align:center'>
        <a href="<?php echo base_url("welcome/switchLang/english"); ?>">English</a> |
        <a href="<?php echo base_url("welcome/switchLang/swahili"); ?>">Swahili</a> |
        <a href="<?php echo base_url("welcome/switchLang/luo"); ?>">Luo</a> |
        <a href="<?php echo base_url("welcome/switchLang/arabic"); ?>">Arabic</a> |
    </div>
    <h1 style="text-align:<?php echo $align?>">
        <?php echo $this->lang->line('welcome') ?>
    </h1>
      
    <div id="body" style="text-align:<?php echo $align;?>">        
        <p><?php echo $this->lang->line('message') ?></p>
    </div>
</div>