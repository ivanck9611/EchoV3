<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.2999" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      productID = {"0":"input_3_1004","1":"input_3_1005","2":"input_3_1006"};
      paymentType = "product";
      JotForm.setCurrencyFormat('USD',true, 'point');
      JotForm.totalCounter({"input_3_1004":{"price":"5"},"input_3_1005":{"price":"7"},"input_3_1006":{"price":"9"}});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
      setTimeout(function() {
          $('input_5').hint('ex: myname@example.com');
       }, 20);
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"checkout","qid":"1","text":"Checkout","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"myProducts3","qid":"3","text":"My Products","type":"control_payment"},{"name":"yourName","qid":"4","text":"Your Name","type":"control_fullname"},{"name":"yourEmail","qid":"5","text":"Your E-mail","type":"control_email"},{"name":"shippingAddress","qid":"6","text":"Shipping Address","type":"control_address"},null,null,null,{"name":"typeA10","qid":"10","text":"Type a question","type":"control_radio"},{"name":"typeA","qid":"11","text":"Type a question","type":"control_radio"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"checkout","qid":"1","text":"Checkout","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"myProducts3","qid":"3","text":"My Products","type":"control_payment"},{"name":"yourName","qid":"4","text":"Your Name","type":"control_fullname"},{"name":"yourEmail","qid":"5","text":"Your E-mail","type":"control_email"},{"name":"shippingAddress","qid":"6","text":"Shipping Address","type":"control_address"},null,null,null,{"name":"typeA10","qid":"10","text":"Type a question","type":"control_radio"},{"name":"typeA","qid":"11","text":"Type a question","type":"control_radio"}]);}, 20);
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.2999" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.2999" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.2999" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=59fb4852cf3bfe589c6c6f21"/>
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-header-group {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-label {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }

    .form-label.form-label-auto {

    display: inline-block;
    float: left;
    text-align: left;

    }

    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }

    .form-all {
      width: 590px;
    }

    .form-label-left,
    .form-label-right,
    .form-label-left.form-label-auto,
    .form-label-right.form-label-auto {
      width: 150px;
    }

    .form-all {
      font-size: 14pxpx
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14pxpx
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14pxpx
    }

    .supernova .form-all, .form-all {
      background-color: ;
      border: 1px solid transparent;
    }

    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      color: #555;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }

    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }

    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }

    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }

    .form-all {
      background-image: none;
    }

  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }

  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.me/submit/73334885455466/" method="post" name="form_73334885455466" id="73334885455466" accept-charset="utf-8">
  <input type="hidden" name="formID" value="73334885455466" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Checkout
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              What would you like to checkout?
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_payment" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3"> My Products </label>
        <div id="cid_3" class="form-input-wide">
          <div data-wrapper-react="true">
            <input type="hidden" name="simple_fpc" data-payment_type="payment" data-component="payment1" value="3" />
            <input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
            <div data-wrapper-react="true">
              <input type="hidden" id="payment_enable_lightbox" />
              <span class="form-product-item hover-product-item">
                <div data-wrapper-react="true" class="form-product-item-detail">
                  <input class="form-checkbox " type="checkbox" id="input_3_1004" name="q3_myProducts3[][id]" value="1004" />
                  <label for="input_3_1004" class="form-product-container">
                    <span data-wrapper-react="true">
                      <span class="form-product-name" id="product-name-input_3_1004">
                        New Product 1
                      </span>
                      <span class="form-product-details">
                        <b>
                          <span data-wrapper-react="true">
                            $
                            <span id="input_3_1004_price">
                              5.00
                            </span>
                          </span>
                        </b>
                      </span>
                    </span>
                  </label>
                </div>
              </span>
              <br/>
              <span class="form-product-item hover-product-item">
                <div data-wrapper-react="true" class="form-product-item-detail">
                  <input class="form-checkbox " type="checkbox" id="input_3_1005" name="q3_myProducts3[][id]" value="1005" />
                  <label for="input_3_1005" class="form-product-container">
                    <span data-wrapper-react="true">
                      <span class="form-product-name" id="product-name-input_3_1005">
                        New Product 2
                      </span>
                      <span class="form-product-details">
                        <b>
                          <span data-wrapper-react="true">
                            $
                            <span id="input_3_1005_price">
                              7.00
                            </span>
                          </span>
                        </b>
                      </span>
                    </span>
                  </label>
                </div>
              </span>
              <br/>
              <span class="form-product-item hover-product-item">
                <div data-wrapper-react="true" class="form-product-item-detail">
                  <input class="form-checkbox " type="checkbox" id="input_3_1006" name="q3_myProducts3[][id]" value="1006" />
                  <label for="input_3_1006" class="form-product-container">
                    <span data-wrapper-react="true">
                      <span class="form-product-name" id="product-name-input_3_1006">
                        New Product 3
                      </span>
                      <span class="form-product-details">
                        <b>
                          <span data-wrapper-react="true">
                            $
                            <span id="input_3_1006_price">
                              9.00
                            </span>
                          </span>
                        </b>
                      </span>
                    </span>
                  </label>
                </div>
              </span>
              <br/>
              <span class="form-payment-total">
                <b>
                  <span id="total-text">
                    Total:
                  </span>

                  <span class="form-payment-price">
                    <span data-wrapper-react="true">
                      $
                      <span id="payment_total">
                        0.00
                      </span>
                    </span>
                  </span>
                </b>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="first_4">
          Your Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top;">
              <input type="text" id="first_4" name="q4_yourName[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" required="" />
              <label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height:13px;"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top;">
              <input type="text" id="last_4" name="q4_yourName[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" required="" />
              <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height:13px;"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5">
          Your E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="email" id="input_5" name="q5_yourEmail" class="form-textbox validate[required, Email]" size="32" value="" placeholder="ex: myname@example.com" data-component="email" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6undefined">
          Shipping Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <table summary="" class="form-address-table" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td colspan="2">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_6_addr_line1" name="q6_shippingAddress[addr_line1]" class="form-textbox validate[required] form-address-line" value="" data-component="address_line_1" required="" />
                    <label class="form-sub-label" for="input_6_addr_line1" id="sublabel_6_addr_line1" style="min-height:13px;"> Street Address </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_6_addr_line2" name="q6_shippingAddress[addr_line2]" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" required="" />
                    <label class="form-sub-label" for="input_6_addr_line2" id="sublabel_6_addr_line2" style="min-height:13px;"> Street Address Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td width="50%">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_6_city" name="q6_shippingAddress[city]" class="form-textbox validate[required] form-address-city" size="21" value="" data-component="city" required="" />
                    <label class="form-sub-label" for="input_6_city" id="sublabel_6_city" style="min-height:13px;"> City </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_6_state" name="q6_shippingAddress[state]" class="form-textbox validate[required] form-address-state" size="22" value="" data-component="state" required="" />
                    <label class="form-sub-label" for="input_6_state" id="sublabel_6_state" style="min-height:13px;"> State / Province </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td width="50%">
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <input type="text" id="input_6_postal" name="q6_shippingAddress[postal]" class="form-textbox validate[required] form-address-postal" size="10" value="" data-component="zip" required="" />
                    <label class="form-sub-label" for="input_6_postal" id="sublabel_6_postal" style="min-height:13px;"> Country </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container" style="vertical-align:top;">
                    <select class="form-dropdown validate[required] form-address-country" name="q6_shippingAddress[country]" id="input_6_country" data-component="country" required="">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Afghanistan"> Afghanistan </option>
                      <option value="Albania"> Albania </option>
                      <option value="Algeria"> Algeria </option>
                      <option value="American Samoa"> American Samoa </option>
                      <option value="Andorra"> Andorra </option>
                      <option value="Angola"> Angola </option>
                      <option value="Anguilla"> Anguilla </option>
                      <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                      <option value="Argentina"> Argentina </option>
                      <option value="Armenia"> Armenia </option>
                      <option value="Aruba"> Aruba </option>
                      <option value="Australia"> Australia </option>
                      <option value="Austria"> Austria </option>
                      <option value="Azerbaijan"> Azerbaijan </option>
                      <option value="The Bahamas"> The Bahamas </option>
                      <option value="Bahrain"> Bahrain </option>
                      <option value="Bangladesh"> Bangladesh </option>
                      <option value="Barbados"> Barbados </option>
                      <option value="Belarus"> Belarus </option>
                      <option value="Belgium"> Belgium </option>
                      <option value="Belize"> Belize </option>
                      <option value="Benin"> Benin </option>
                      <option value="Bermuda"> Bermuda </option>
                      <option value="Bhutan"> Bhutan </option>
                      <option value="Bolivia"> Bolivia </option>
                      <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                      <option value="Botswana"> Botswana </option>
                      <option value="Brazil"> Brazil </option>
                      <option value="Brunei"> Brunei </option>
                      <option value="Bulgaria"> Bulgaria </option>
                      <option value="Burkina Faso"> Burkina Faso </option>
                      <option value="Burundi"> Burundi </option>
                      <option value="Cambodia"> Cambodia </option>
                      <option value="Cameroon"> Cameroon </option>
                      <option value="Canada"> Canada </option>
                      <option value="Cape Verde"> Cape Verde </option>
                      <option value="Cayman Islands"> Cayman Islands </option>
                      <option value="Central African Republic"> Central African Republic </option>
                      <option value="Chad"> Chad </option>
                      <option value="Chile"> Chile </option>
                      <option value="China"> China </option>
                      <option value="Christmas Island"> Christmas Island </option>
                      <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                      <option value="Colombia"> Colombia </option>
                      <option value="Comoros"> Comoros </option>
                      <option value="Congo"> Congo </option>
                      <option value="Cook Islands"> Cook Islands </option>
                      <option value="Costa Rica"> Costa Rica </option>
                      <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                      <option value="Croatia"> Croatia </option>
                      <option value="Cuba"> Cuba </option>
                      <option value="Cyprus"> Cyprus </option>
                      <option value="Czech Republic"> Czech Republic </option>
                      <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                      <option value="Denmark"> Denmark </option>
                      <option value="Djibouti"> Djibouti </option>
                      <option value="Dominica"> Dominica </option>
                      <option value="Dominican Republic"> Dominican Republic </option>
                      <option value="Ecuador"> Ecuador </option>
                      <option value="Egypt"> Egypt </option>
                      <option value="El Salvador"> El Salvador </option>
                      <option value="Equatorial Guinea"> Equatorial Guinea </option>
                      <option value="Eritrea"> Eritrea </option>
                      <option value="Estonia"> Estonia </option>
                      <option value="Ethiopia"> Ethiopia </option>
                      <option value="Falkland Islands"> Falkland Islands </option>
                      <option value="Faroe Islands"> Faroe Islands </option>
                      <option value="Fiji"> Fiji </option>
                      <option value="Finland"> Finland </option>
                      <option value="France"> France </option>
                      <option value="French Polynesia"> French Polynesia </option>
                      <option value="Gabon"> Gabon </option>
                      <option value="The Gambia"> The Gambia </option>
                      <option value="Georgia"> Georgia </option>
                      <option value="Germany"> Germany </option>
                      <option value="Ghana"> Ghana </option>
                      <option value="Gibraltar"> Gibraltar </option>
                      <option value="Greece"> Greece </option>
                      <option value="Greenland"> Greenland </option>
                      <option value="Grenada"> Grenada </option>
                      <option value="Guadeloupe"> Guadeloupe </option>
                      <option value="Guam"> Guam </option>
                      <option value="Guatemala"> Guatemala </option>
                      <option value="Guernsey"> Guernsey </option>
                      <option value="Guinea"> Guinea </option>
                      <option value="Guinea-Bissau"> Guinea-Bissau </option>
                      <option value="Guyana"> Guyana </option>
                      <option value="Haiti"> Haiti </option>
                      <option value="Honduras"> Honduras </option>
                      <option value="Hong Kong"> Hong Kong </option>
                      <option value="Hungary"> Hungary </option>
                      <option value="Iceland"> Iceland </option>
                      <option value="India"> India </option>
                      <option value="Indonesia"> Indonesia </option>
                      <option value="Iran"> Iran </option>
                      <option value="Iraq"> Iraq </option>
                      <option value="Ireland"> Ireland </option>
                      <option value="Israel"> Israel </option>
                      <option value="Italy"> Italy </option>
                      <option value="Jamaica"> Jamaica </option>
                      <option value="Japan"> Japan </option>
                      <option value="Jersey"> Jersey </option>
                      <option value="Jordan"> Jordan </option>
                      <option value="Kazakhstan"> Kazakhstan </option>
                      <option value="Kenya"> Kenya </option>
                      <option value="Kiribati"> Kiribati </option>
                      <option value="North Korea"> North Korea </option>
                      <option value="South Korea"> South Korea </option>
                      <option value="Kosovo"> Kosovo </option>
                      <option value="Kuwait"> Kuwait </option>
                      <option value="Kyrgyzstan"> Kyrgyzstan </option>
                      <option value="Laos"> Laos </option>
                      <option value="Latvia"> Latvia </option>
                      <option value="Lebanon"> Lebanon </option>
                      <option value="Lesotho"> Lesotho </option>
                      <option value="Liberia"> Liberia </option>
                      <option value="Libya"> Libya </option>
                      <option value="Liechtenstein"> Liechtenstein </option>
                      <option value="Lithuania"> Lithuania </option>
                      <option value="Luxembourg"> Luxembourg </option>
                      <option value="Macau"> Macau </option>
                      <option value="Macedonia"> Macedonia </option>
                      <option value="Madagascar"> Madagascar </option>
                      <option value="Malawi"> Malawi </option>
                      <option value="Malaysia"> Malaysia </option>
                      <option value="Maldives"> Maldives </option>
                      <option value="Mali"> Mali </option>
                      <option value="Malta"> Malta </option>
                      <option value="Marshall Islands"> Marshall Islands </option>
                      <option value="Martinique"> Martinique </option>
                      <option value="Mauritania"> Mauritania </option>
                      <option value="Mauritius"> Mauritius </option>
                      <option value="Mayotte"> Mayotte </option>
                      <option value="Mexico"> Mexico </option>
                      <option value="Micronesia"> Micronesia </option>
                      <option value="Moldova"> Moldova </option>
                      <option value="Monaco"> Monaco </option>
                      <option value="Mongolia"> Mongolia </option>
                      <option value="Montenegro"> Montenegro </option>
                      <option value="Montserrat"> Montserrat </option>
                      <option value="Morocco"> Morocco </option>
                      <option value="Mozambique"> Mozambique </option>
                      <option value="Myanmar"> Myanmar </option>
                      <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                      <option value="Namibia"> Namibia </option>
                      <option value="Nauru"> Nauru </option>
                      <option value="Nepal"> Nepal </option>
                      <option value="Netherlands"> Netherlands </option>
                      <option value="Netherlands Antilles"> Netherlands Antilles </option>
                      <option value="New Caledonia"> New Caledonia </option>
                      <option value="New Zealand"> New Zealand </option>
                      <option value="Nicaragua"> Nicaragua </option>
                      <option value="Niger"> Niger </option>
                      <option value="Nigeria"> Nigeria </option>
                      <option value="Niue"> Niue </option>
                      <option value="Norfolk Island"> Norfolk Island </option>
                      <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                      <option value="Northern Mariana"> Northern Mariana </option>
                      <option value="Norway"> Norway </option>
                      <option value="Oman"> Oman </option>
                      <option value="Pakistan"> Pakistan </option>
                      <option value="Palau"> Palau </option>
                      <option value="Palestine"> Palestine </option>
                      <option value="Panama"> Panama </option>
                      <option value="Papua New Guinea"> Papua New Guinea </option>
                      <option value="Paraguay"> Paraguay </option>
                      <option value="Peru"> Peru </option>
                      <option value="Philippines"> Philippines </option>
                      <option value="Pitcairn Islands"> Pitcairn Islands </option>
                      <option value="Poland"> Poland </option>
                      <option value="Portugal"> Portugal </option>
                      <option value="Puerto Rico"> Puerto Rico </option>
                      <option value="Qatar"> Qatar </option>
                      <option value="Republic of the Congo"> Republic of the Congo </option>
                      <option value="Romania"> Romania </option>
                      <option value="Russia"> Russia </option>
                      <option value="Rwanda"> Rwanda </option>
                      <option value="Saint Barthelemy"> Saint Barthelemy </option>
                      <option value="Saint Helena"> Saint Helena </option>
                      <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                      <option value="Saint Lucia"> Saint Lucia </option>
                      <option value="Saint Martin"> Saint Martin </option>
                      <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                      <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                      <option value="Samoa"> Samoa </option>
                      <option value="San Marino"> San Marino </option>
                      <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                      <option value="Saudi Arabia"> Saudi Arabia </option>
                      <option value="Senegal"> Senegal </option>
                      <option value="Serbia"> Serbia </option>
                      <option value="Seychelles"> Seychelles </option>
                      <option value="Sierra Leone"> Sierra Leone </option>
                      <option value="Singapore"> Singapore </option>
                      <option value="Slovakia"> Slovakia </option>
                      <option value="Slovenia"> Slovenia </option>
                      <option value="Solomon Islands"> Solomon Islands </option>
                      <option value="Somalia"> Somalia </option>
                      <option value="Somaliland"> Somaliland </option>
                      <option value="South Africa"> South Africa </option>
                      <option value="South Ossetia"> South Ossetia </option>
                      <option value="South Sudan"> South Sudan </option>
                      <option value="Spain"> Spain </option>
                      <option value="Sri Lanka"> Sri Lanka </option>
                      <option value="Sudan"> Sudan </option>
                      <option value="Suriname"> Suriname </option>
                      <option value="Svalbard"> Svalbard </option>
                      <option value="Swaziland"> Swaziland </option>
                      <option value="Sweden"> Sweden </option>
                      <option value="Switzerland"> Switzerland </option>
                      <option value="Syria"> Syria </option>
                      <option value="Taiwan"> Taiwan </option>
                      <option value="Tajikistan"> Tajikistan </option>
                      <option value="Tanzania"> Tanzania </option>
                      <option value="Thailand"> Thailand </option>
                      <option value="Timor-Leste"> Timor-Leste </option>
                      <option value="Togo"> Togo </option>
                      <option value="Tokelau"> Tokelau </option>
                      <option value="Tonga"> Tonga </option>
                      <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                      <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                      <option value="Tristan da Cunha"> Tristan da Cunha </option>
                      <option value="Tunisia"> Tunisia </option>
                      <option value="Turkey"> Turkey </option>
                      <option value="Turkmenistan"> Turkmenistan </option>
                      <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                      <option value="Tuvalu"> Tuvalu </option>
                      <option value="Uganda"> Uganda </option>
                      <option value="Ukraine"> Ukraine </option>
                      <option value="United Arab Emirates"> United Arab Emirates </option>
                      <option value="United Kingdom"> United Kingdom </option>
                      <option value="Uruguay"> Uruguay </option>
                      <option value="Uzbekistan"> Uzbekistan </option>
                      <option value="Vanuatu"> Vanuatu </option>
                      <option value="Vatican City"> Vatican City </option>
                      <option value="Venezuela"> Venezuela </option>
                      <option value="Vietnam"> Vietnam </option>
                      <option value="British Virgin Islands"> British Virgin Islands </option>
                      <option value="Isle of Man"> Isle of Man </option>
                      <option value="US Virgin Islands"> US Virgin Islands </option>
                      <option value="Wallis and Futuna"> Wallis and Futuna </option>
                      <option value="Western Sahara"> Western Sahara </option>
                      <option value="Yemen"> Yemen </option>
                      <option value="Zambia"> Zambia </option>
                      <option value="Zimbabwe"> Zimbabwe </option>
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_6_country" id="sublabel_6_country" style="min-height:13px;"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10">
          Type a question
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_10" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_10_0" name="q10_typeA10" value="Free Shipping" required="" />
              <label id="label_input_10_0" for="input_10_0"> Free Shipping </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_10_1" name="q10_typeA10" value="Standard Shipping (HKD$30)" required="" />
              <label id="label_input_10_1" for="input_10_1"> Standard Shipping (HKD$30) </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11">
          Type a question
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_0" name="q11_typeA" value="Cash on delivery" required="" />
              <label id="label_input_11_0" for="input_11_0"> Cash on delivery </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_1" name="q11_typeA" value="Credit card" required="" />
              <label id="label_input_11_1" for="input_11_1"> Credit card </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px;" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="clear:both">
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="73334885455466" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "73334885455466-73334885455466";
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter">
    <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=73334885455466&utm_content=jotform_logo&utm_campaign=powered_by_jotform_signup_hp" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="" style="height: 44px;"></a>
    <div class="formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own JotForm - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=73334885455466&utm_content=jotform_button&utm_campaign=powered_by_jotform_signup_hp" target="_blank">Create your own JotForm</a>
    </div>
  </div>
</form>
<script type="text/javascript">JotForm.ownerView=true;</script>
