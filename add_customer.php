<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>



<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->     
                                
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide"  method="post" action="pages/save_customer.php" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">NAME OF IMPORTER <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                               
											
                                                <select class="form-control" id="val-username" name="importer" required="">
                                                    <option value="">Please select</option>
                                                    <option value="Farm chemicals">Farm chemmicals</option>
                                                    <option value="Marin Trading">Marin Trading</option>
													<option value="Parmalat">Parmalat</option>
                                                    <option value="Clover">Clover</option>
													<option value="Ocean Basket">Ocean Basket</option>
                                                    <option value="Logico">Logico</option>
													<option value="Fruit cold storage">Fruit cold storage</option>
													<option value="Ezulwini PnP">Ezulwini PnP</option>
													<option value="Riverstone PnP">Riverstone PnP</option>
													<option value="Butterfiled">Butterfiled<option>
													<option value="Ruchi">Ruchi</option>
													<option value="Eswatini Kitchen">Eswatini Kitchen</option>
													<option value="Infanta foods">Infanta foods</option>
													<option value="Nsoko Investment">Nsoko Investmenta>
													<option value="Premier Swazi Baker">Premier Swazi Baker</option>
													<option value="Mass Cash">Mass Cash<option>
													  <option value="PnP Swaziland">PnP Swaziland</option>
													     <option value="Southern Tradingg"> Southern Trading</option>
													   <option value="Vilage">Village<option>
												   <option value="Chapelat">Chapelat<option>
												      <option value="Debonairs">Debonairs</option>
													     <option value="Boxer">Boxer</option>
												   <option value="Ok Bazaars">Ok Bazaars</option>
												      <option value="KFC">KFC</option>
													   <option value="AD Enterprice">AD Enterprice</option>
												   <option value="Woolworths">Woolworths</option>
												      <option value="Prime Bakery">Prime Bakery</option>
													     <option value="Ok Foods">OK Foods</option>
													   <option value="Hungry Lion">Hungry Lion</option>
													   <option value="Spar Trading">Spar Trading</option>
													   
													   
													   <option value="Mugg & Bean">Mugg & Bean</option>
												   <option value="Trenco">Trenco</option>
												      <option value="United King Pie">United King Pie</option>
													     <option value="Swaziland Milling">Swaziland Milling</option>
													   <option value="Retail Solution">Retail Solution</option>
													   <option value="Carlomo Investment">Carlomo Investment</option>
													   
													     <option value="Tshepo Brian">Tshepo Brian"></option>
												   <option value="Pricerite">Pricerite</option>
												      <option value="TQM Textile">TQM Textile</option>
													     <option value="Nandos">Nandos</option>
													   <option value="Honey Wise">Honey wise<option>
													   <option value="Linkmed">Linkmed</option>
													   <option value="Buy n Save">Buy n save</option>
                                                </select>
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">BOARDER POST <span class="text-danger">*</span></label>
                                            
											 <div class="col-lg-6">
                                                <select class="form-control" id="val-username" name="borderpost" required="">
                                                    <option value="">Please select</option>
                                                    <option value="Ngwenya">Ngwenya</option>
                                                    <option value="Oshoek">Oshoek</option>
													<option value="Sicunusa">Sicununsa</option>
                                                    <option value="Lavumisa">Lavumisa</option>
													<option value="Mananga">Mananga</option>
                                                    <option value="Oshoek">Oshoek</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">PERMIT N0. <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="permitNo" placeholder="Enter permit no.." required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">VEHCLE NO. <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="hevicle" placeholder="Enter vehicle no.." required="">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">SAD500 NO.<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="sad500" placeholder="Enter SAD500 NO.." required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">DAIRY PRODUCT NAME <span class="text-danger">*</span></label>
                                            
												<div class="col-lg-6">
                                                <select class="form-control" id="val-username" name="dairy" required="">
                                                    <option value="">Please select</option>
                                                    <option value="Baby Formula">Baby Formula</option>
                                                    <option value="Butter">Butter</option>
													<option value="Buttermilk Powder">Buttermilk Powder</option>
                                                    <option value="Cheese">Cheese</option>
													<option value="Condensed Milk">Condensed Milk</option>
                                                    <option value="Cream">Cream</option>
													<option value="Creamers">Creamers</option>
													<option value="Custard">Custard</option>
													<option value="Caramel">Caramel</option>
													<option value="Dairy Juice">Daiiry Juice</option>
													<option value="Dairy Blends">Dairy Blends</option>
													<option value="Emasi">Emasi</option>
													<option value="Flavoured milk">Flavoured milk</option>
													<option value="Fresh milk">Fresh milk</option>
													<option value="Full cream milk powder(F)">Full cream milk powder(F)</option>
													<option value="Full cream milk powder(P)">Full cream milk poweder(p)</option>
													  <option value="Goats milk UHT">Goats Milk UHT</option>
													     <option value="Honey(Natural)">Honey(Natural)</option>
													   <option value="Honey(artificial)">Honey(artificial)</option>
												   <option value="Cream">Ice cream</option>
												      <option value="Margerine">Margerine</option>
													     <option value="Raw Milk">Raw milk</option>
												   <option value="Pasturised milk">Pasturised milk</option>
												      <option value="Skim milk UHT">Skim milk UHT</option>
													   <option value="Skim milk powerd(f)">Skim milk powder(f)</option>
													   <option value="Skim milk powerder(p)">Skim milk powder(p)</option>
												   <option value="Sova milk">Sova milk</option>
												      <option value="UHT milk">UHT milk</option>
													     <option value="Whey powder(f)">Whey powder(f)</option>
													   <option value="Whey powder(p)">Whey powder(p)</option>
													   <option value="Yoghurt">Yoghurt</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">INVOICE NO. <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="invoiceNo" placeholder="Enter name of importer.." required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">weight <span class="text-danger">*</span></label>
											<div class="col-lg-6">
											 <input type='text' id='convert' placeholder="auto-calculate" onkeyup="updateConverted()" >
											 </div>
											 </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">calculated weight <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type='text' class="form-control" id="val-qtyy" name="qty" placeholder="auto results" >
                                            </div>
											
								

											</div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">INVOICE AMOUNT <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-amt" name="amount" placeholder="Enter invoice amount.." required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">LEVY PERCENT % <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-pec" name="pec" placeholder="Enter percentage.." onkeyup="updateConverted()">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">LEVY<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-levy" name="levy" placeholder="Enter LEVY.." required="">
                                            </div>
                                        </div>
                                        
                                        <script>
                                              function updateConverted() {
                                               var conversionRate = 100;
											   var conversionRatee = 1000;
                                             document.getElementById('val-levy').value = document.getElementById('val-pec').value / conversionRate * document.getElementById('val-amt').value ;
											  document.getElementById('val-qtyy').value = document.getElementById('convert').value / conversionRatee;
}
                                           </script>
                                        
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>

                                        
                <!-- /# row -->


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
         
</body>

</html>
<?php include('footer.php');?>