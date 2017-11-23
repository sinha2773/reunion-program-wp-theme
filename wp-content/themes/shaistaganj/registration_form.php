<?php 
include 'inc/header.php';
 ?>

 <?php 
$blood_group = array(
    1=>'A+',
    2=>'A-',
    3=>'B+',
    4=>'B-',    
    5=>'AB+',
    6=>'AB-',
    7=>'O+',
    8=>'O-'  
  );
$year=array(
  1=>'2017',
  2=>'2016',
  3=>'2015',
  4=>'2014',
  5=>'2013',
  6=>'2012',
  7=>'2011',
  8=>'2010',
  9=>'2009',
  10=>'2008',
  11=>'2007',
  12=>'2006',
  13=>'2005',
  14=>'2004',
  15=>'2003',
  16=>'2002',
  17=>'2001',
  18=>'2000',
  19=>'1999',
  20=>'1998',
  21=>'1997',
  22=>'1996',
  23=>'1995',
  24=>'1994',
  25=>'1993',
  26=>'1992',
  27=>'1991',
  28=>'1990',
  29=>'1989',
  30=>'1988',
  31=>'1987',
  32=>'1986',
  33=>'1985',
  34=>'1984',
  35=>'1983',
  36=>'1982',
  37=>'1981',
  38=>'1980',
  39=>'1979',
  40=>'1978',
  41=>'1977',
  42=>'1976',
  43=>'1975',
  44=>'1974',
  45=>'1973',
  46=>'1972',
  47=>'1971',
  48=>'1970',
  49=>'1969',
  50=>'1968',
  51=>'1967',
  52=>'1966',
  53=>'1965',
  54=>'1964',
  55=>'1963',
  56=>'1962',
  57=>'1961',
  58=>'1960',
  59=>'1959',
  60=>'1958',
  61=>'1957',
  62=>'1956',
  63=>'1955',
  64=>'1954',
  65=>'1953',
  66=>'1952',
  67=>'1951',
  68=>'1950',
  69=>'1949',
  70=>'1948',
  71=>'1947',
  72=>'1946',
  73=>'1945',
  74=>'1944',
  75=>'1943',
  76=>'1942',
  77=>'1941',
  78=>'1940',
  79=>'1939',
  80=>'1938',
  81=>'1937',
  82=>'1936',
  83=>'1935',
  84=>'1934',
  85=>'1933',
  86=>'1932',
  87=>'1931',
  88=>'1930',
  89=>'1929',
  90=>'1928',
  91=>'1927',
  92=>'1926',
  93=>'1925',
  94=>'1924',
  95=>'1923',
  96=>'1922',
  97=>'1921',
  98=>'1920',
  99=>'1919',
  100=>'1918'
  

);

  ?>

  
 <section class="all_section_upper">
   
 </section>
 <section class="registration_from_section">
   <div class="container">
     <div class="main_registration_form">
       <div class="registration_form_content">
         <div class="registration_form_header">
           <div class="row">
             <div class="col-md-12">
               <div class="registration_form_header_content">
                  <h2>Shayestaganj High School</h2>
                  <p>Ex-Student Re-Union Registration</p>                 
               </div>
             </div>
           </div>
         </div>
         <div class="registration_form_body">
           <form method="POST" action="" id="registration_form">
             <div class="row">
               <div class="col-md-6 form_padding_right">
                 <div class="form_left">
                  <div class="row">
                   <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Name<span>*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Your Name" required>
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Date of Birth<span>*</span></label>
                      <div class="col-md-8">
                        <input type="Date" class="form-control" id="inputEmail3" placeholder="" required>
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Blood Group<span>*</span></label>
                      <div class="col-md-8">
                        <select class="form-control">
                          <option>Select Blood Group</option>
                          <?php foreach($blood_group as $key=>$value){ ?>
                            <?php $selected = $key==$cat ? 'selected' : '';?>
                            <option value="<?php echo $key;?>"><?php echo $value;?></option>
                          <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="name" class="col-md-4 control-label">Father's Name</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Father Name">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Mother's Name</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Mother Name">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Spouse's Name</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Spouse Name">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Children Name & Age</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Children Name & Age">
                      </div>
                  </div>
                
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Nationality<span>*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nationality">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">NID No<span>*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="NID No">
                      </div>
                  </div>
                  
                </div>
                 </div>
               </div>
               <div class="col-md-6 form_padding_left">
                 <div class="form_right">
                   <div class="row">
                     <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Profession<span>*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Profession">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Institute / Organization<span>*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Institute / Organization">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Telephone</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Telephone No">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Mobile<span>*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="+8801XXXXXXXXX">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Email<span>*</span></label>
                      <div class="col-md-8">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                  </div>
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label">Year of Passing(SSC)<span>*</span></label>
                      <div class="col-md-8">
                        <select class="form-control">
                          <option>Select Year</option>
                          <?php foreach($year as $key=>$value){ ?>
                            <?php $selected = $key==$cat ? 'selected' : '';?>
                            <option value="<?php echo $key;?>"><?php echo $value;?></option>
                          <?php } ?>
                        </select>
                      </div>
                  </div>
                   <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label label_margin_top">Your Image<span>*</span></label>
                      <div class="col-md-8">
                        <input type="file">
                      </div>
                  </div> 
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label label_margin_top">Receipt Image<span>*</span></label>
                      <div class="col-md-8">
                        <input type="file">
                      </div>
                  </div> 
                  <div class="form-group inpur_tag_margin_bottom">
                    <label for="inputEmail3" class="col-md-4 control-label label_margin_top">Family Image<span>*</span></label>
                      <div class="col-md-8">
                        <input type="file">
                      </div>
                  </div> 
                   </div>
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="submit_button_div">
                   <div class="">
                      <div class="">
                        <button type="submit" class="">Submit</button>
                      </div>
                    </div>
                 </div>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </section>

 <script type="text/javascript">
  $("#registration_form").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      name: "Please Enter your name",
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com"
      }
    }
  });
 </script>

<?php 
include 'inc/footer.php';
 ?>