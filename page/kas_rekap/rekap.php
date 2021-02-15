<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Kas Masuk
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Masuk</th>
                                            <th>Jenis</th>
                                            <th>Keluar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    $no = 1;
                                    $sql = $koneksi->query("SELECT * FROM kas");
                                    while($data=$sql->fetch_assoc()) {

                                    ?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['kode']; ?></td>
                                            <td><?php echo date('d F Y',strtotime($data['tgl'])); ?></td>
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td align="right"><?php echo number_format($data['jumlah']).",-"; ?></td>
                                             <td><?php echo $data['jenis']; ?></td>
                                              <td align="right"><?php echo number_format($data['keluar']).",-"; ?></td>
                                            
                                        </tr>
                                    <?php
                                    $total = $total+$data['jumlah'];
                                    $total_keluar = $total_keluar+$data['keluar'];
                                    $saldo_akhir = $total - $total_keluar;
                                    }
                                     ?>
                                    </tbody>
                                    <tr>
                                        <th colspan="5" style="text-align: center; font-size:20px;">Total Kas Masuk</th>
                                        <td  style="font-size: 17px; text-align:right;"><?php echo number_format($total).",-"; ?></td>
                                    </tr>

                                    
                                     <tr>
                                        <th colspan="5" style="text-align: center; font-size:20px;">Total Kas Keluar</th>
                                        <td  style="font-size: 17px; text-align:right;"><?php echo number_format($total_keluar).",-"; ?></td>
                                    </tr>

                                    <tr>
                                        <th colspan="5" style="text-align: center; font-size:20px;">Saldo Akhir</th>
                                        <th  style="font-size: 17px; text-align:right;"><?php echo "Rp." .number_format($saldo_akhir).",-"; ?></th>
                                    </tr>


                                    </table>
                                </div>
                                <!--  Modals-->