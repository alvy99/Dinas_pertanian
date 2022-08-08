<?php
if (session_id() == '' || !isset($_SESSION)) {
	session_start();
}
?>

<script type="text/javascript">
    $(function() {
        $('#inner-content-div').slimScrollHorizontal({
            width: '1050px',
            alwaysVisible: true
        });
    });
    $(document).ready(function() {
        // date picker
        $("#tahun_bulan_awal").datepicker({
            changeMonth: true,
            changeYear: true,
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd'
        });
        $("#tahun_bulan_akhir").datepicker({
            changeMonth: true,
            changeYear: true,
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd'
        });
        $(".select2").select2({
            placeholder: " ",
            allowClear: true
        });
    });
</script>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="breadcrumb">

                <a href="#">Retail</a>
                <a href="#">Laporan Retail</a>
                <a class="last" href="#">Laporan Pembelian</a>
            </div>
            <div class="clear"></div>
            <div class="head-content">
                <h3>Laporan Pembelian</h3>
                <div class="clear"></div>
            </div>
            <div class="action">
                <span class="action-group">
                    <a href="{$config->site_url('retail/laporan_pembelian/cetak_excel/')}" class="group-none"><img src="{$BASEURL}/resource/doc/images/icon/excel.gif" alt="" />Cetak Laporan</a>
                </span>
                <div class="clear"></div>
            </div>
            <div class="search">
                <form method="post" action="{$config->site_url('retail/laporan_pembelian/search')}">
                    <table width="100%" class="table-search">
                        <tr>
                            <th colspan="2">Data Filtering</th>
                        </tr>
                        <tr>
                            <td width="25%">Tahun</td>
                            <td width="75%">
                                <select name="tahun">
                                    {for $i=$tahun.min_tahun to $tahun.max_tahun}
                                    <option value="{$i}" {if $search.tahun == $i} selected="selected" {/if}>{$i}</option>
                                    {/for}
                                </select>
                                <button type="submit" name="save" value="Tampilkan" class="button-green">Tampilkan</button>
                                <button type="submit" name="save" value="Reset" class="button-red">Reset</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="search">
                <table width="100%" class="table-search">
                    <tr>
                        <th>Keterangan Warna</th>
                    </tr>
                    <tr>
                        <td width="100%">
                            <font style="color:red;">(PEMBELIAN - RETURN) PEMBELIAN TUNAI BARANG SENDIRI</font><br/>
                            <font style="color:green;">(PEMBELIAN - RETURN) PEMBELIAN KREDIT BARANG SENDIRI</font><br/>
                            <font style="color:blue;">(PEMBELIAN - RETURN) PEMBELIAN KREDIT BARANG KONSINYASI</font><br/>
                            <font style="color:black;">TOTAL NOMINAL PEMBELIAN DIBULAN TERSEBUT</font><br/>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- notification template -->

            <!-- end of notification template-->
            <div class="some-content-related-div">
                <div class="card-body">
                <!-- <table id="example2" class="table table-bordered table-hover"> -->
                <!-- <div id="inner-content-div"> -->
                    <table class="table table-bordered table-hover" width="100%" style="height: 150px; overflow: hidden; position: relative; width: auto;">
                        <tr>
                            <th width="2%" rowspan="2">NO</th>
                            <th width="11%" rowspan="2">NAMA SUPPLIER</th>
                            <th width="84%" colspan="12">BULAN</th>
                        </tr>
                        <tr>
                  
                            <th width="7%">
                                <a href="#" target="_new">tester</a>
                            </th>
                            
                        </tr>
                  
                        <tr>
                            <td rowspan="4" align="right"></td>
                            <td rowspan="4"></td>
                            <td style="color:red;" align="right"><span style="float:left;">Rp.</span>
                        </tr>
                        <tr>
                            <td style="color:green;" align="right"><span style="float:left;">Rp.</span></td>
                        </tr>
                        <tr>
                            <td style="color:blue;" align="right"><span style="float:left;">Rp.</span></td>
                        </tr>
                        <tr>
                            <td style="color:black;" align="right">
                                <span style="float:left;">Rp.</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
