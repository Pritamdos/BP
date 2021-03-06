<!doctype html>
<html lang="en" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="canonical" href="http://demo.designshopify.com/" />
    <meta name="description" content="" />
    <title>BP Jewellers</title>

    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>

    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">

    <script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templateCustomersRegister notouch">
  <?php include "header.php"?>
    <div id="content-wrapper-parent">
        <div id="content-wrapper">
            <!-- Content -->
            <div id="content" class="clearfix">
                <div id="breadcrumb" class="breadcrumb">
                    <div itemprop="breadcrumb" class="container">
                        <div class="row">
                            <div class="col-md-24">
                                <a href="index.php" class="homepage-link" title="Back to the frontpage">Home</a>
                                <span>/</span>
                                <span class="page-title">Address</span>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container">
                        <div class="row">
                            <div id="page-header" class="col-md-24">
                                <h1 id="page-title">MANAGE ADDRESS</h1>
                            </div>
                            <div id="col-main" class="address-page manage-address clearfix">
                                <div class="clearfix">
                                    <div id="address_tables">
                                        <div id="add_address" class="clearfix col-md-12" style="display:none">
                                            <div class="customer_address edit_address">
                                                <form method="post" action="http://demo.designshopify.com/html_jewelry/address.html"
                                                    id="address_form_new" accept-charset="UTF-8">
                                                    <input name="form_type" type="hidden" value="customer_address">
                                                    <input name="utf8" type="hidden" value="✓">
                                                    <ul class="row list-unstyled customer_address_table">
                                                        <li class="col-md-24">
                                                            <label class="control-label" for="address_first_name_new">First
                                                                Name</label>
                                                            <input type="text" id="address_first_name_new" class="form-control"
                                                                name="address[first_name]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-24">
                                                            <label class="control-label" for="address_last_name_new">Last
                                                                Name</label>
                                                            <input type="text" id="address_last_name_new" class="form-control"
                                                                name="address[last_name]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-24">
                                                            <label class="control-label" for="address_company_new">Company</label>
                                                            <input type="text" id="address_company_new" class="form-control"
                                                                name="address[company]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-24">
                                                            <label class="control-label" for="address_address1_new">Address1</label>
                                                            <input type="text" id="address_address1_new" class="form-control"
                                                                name="address[address1]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-24">
                                                            <label class="control-label" for="address_address2_new">Address2</label>
                                                            <input type="text" id="address_address2_new" class="form-control"
                                                                name="address[address2]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-12">
                                                            <label class="control-label" for="address_city_new">City</label>
                                                            <input type="text" id="address_city_new" class="form-control"
                                                                name="address[city]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-12">
                                                            <label class="control-label" for="address_country_new">Country</label>
                                                            <select id="address_country_new" class="form-control" name="address[country]"
                                                                data-default="">
                                                                <option value="" data-provinces="[]">-- Please Select
                                                                    --</option>
                                                            </select>
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-12">
                                                            <label class="control-label" for="address_province_new">Province</label>
                                                            <select id="address_province_new" class="form-control" name="address[province]"
                                                                data-default=""></select>
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-12">
                                                            <label class="control-label" for="address_zip_new">Zip</label>
                                                            <input type="text" id="address_zip_new" class="form-control"
                                                                name="address[zip]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-12">
                                                            <label class="control-label" for="address_phone_new">Phone</label>
                                                            <input type="text" id="address_phone_new" class="form-control"
                                                                name="address[phone]" value="">
                                                        </li>
                                                        <li class="clearfix"></li>
                                                        <li class="col-md-12 set_default">
                                                            <input type="checkbox" id="address_default_address_new"
                                                                name="address[default]" value="1"> Set as Default
                                                            Address?
                                                        </li>
                                                    </ul>
                                                    <div class="last clearfix">
                                                        <button class="btn btn-2 mright-7" type="submit">Add Address</button>
                                                        <button class="btn btn-3" type="button" onclick="HTML.CustomerAddress.toggleNewForm();return false">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div class="col-md-12 first">
                                                <div id="parent_address_226447297" class="address_table">
                                                    <div id="edit_address_226447297" class="customer_address edit_address"
                                                        style="display:none">
                                                        <form method="post" action="http://demo.designshopify.com/html_jewelry/address.html"
                                                            id="address_form_226447297" accept-charset="UTF-8">
                                                            <input name="form_type" type="hidden" value="customer_address">
                                                            <input type="hidden" name="_method" value="put">
                                                            <input name="utf8" type="hidden" value="✓">
                                                            <ul class="row list-unstyled customer_address_table">
                                                                <li class="col-md-24">
                                                                    <label class="control-label" for="address_first_name_226447297">First
                                                                        Name</label>
                                                                    <input type="text" id="address_first_name_226447297"
                                                                        class="form-control" name="address[first_name]"
                                                                        value="Jin">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-24">
                                                                    <label class="control-label" for="address_last_name_226447297">Last
                                                                        Name</label>
                                                                    <input type="text" id="address_last_name_226447297"
                                                                        class="form-control" name="address[last_name]"
                                                                        value="Alkiad">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-24">
                                                                    <label class="control-label" for="address_company_226447297">Company</label>
                                                                    <input type="text" id="address_company_226447297"
                                                                        class="form-control" name="address[company]"
                                                                        value="Codespot">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-24">
                                                                    <label class="control-label" for="address_address1_226447297">Address1</label>
                                                                    <input type="text" id="address_address1_226447297"
                                                                        class="form-control" name="address[address1]"
                                                                        value="Ung Van Khiem">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-24">
                                                                    <label class="control-label" for="address_address2_226447297">Address2</label>
                                                                    <input type="text" id="address_address2_226447297"
                                                                        class="form-control" name="address[address2]"
                                                                        value="">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-12">
                                                                    <label class="control-label" for="address_city_226447297">City</label>
                                                                    <input type="text" id="address_city_226447297"
                                                                        class="form-control" name="address[city]" value="Ho Chi Minh">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-12">
                                                                    <label class="control-label" for="address_country_226447297">Country</label>
                                                                    <select id="address_country_226447297" class="form-control"
                                                                        name="address[country]" data-default="Vietnam">
                                                                        <option value="" data-provinces="[]">-- Please
                                                                            Select --</option>
                                                                    </select>
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-12" id="address_province_container_226447297"
                                                                    style="display:none">
                                                                    <label class="control-label" for="address_province_226447297">Province</label>
                                                                    <select id="address_province_226447297" class="form-control"
                                                                        name="address[province]" data-default=""></select>
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-12">
                                                                    <label class="control-label" for="address_zip_226447297">Zip</label>
                                                                    <input type="text" id="address_zip_226447297" class="form-control"
                                                                        name="address[zip]" value="70000">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-12">
                                                                    <label class="control-label" for="address_phone_226447297">Phone</label>
                                                                    <input type="text" id="address_phone_226447297"
                                                                        class="form-control" name="address[phone]"
                                                                        value="0123456789">
                                                                </li>
                                                                <li class="clearfix"></li>
                                                                <li class="col-md-24 set_default">
                                                                    <input type="checkbox" id="address_default_address_226447297"
                                                                        name="address[default]" value="1"> Set as
                                                                    Default Address?
                                                                </li>
                                                                <li class="clearfix"></li>
                                                            </ul>
                                                            <div class="last clearfix">
                                                                <button class="btn btn-2 mright-7" type="submit">Update
                                                                    Address</button>
                                                                <button class="btn btn-4" type="button" onclick="HTML.CustomerAddress.toggleForm(226447297);return false">Cancel</button>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    </div>
                                                    <div id="view_address_226447297" class="customer_address view_address clearfix">
                                                        <div class="address_info col-md-14">
                                                            <address class="clearfix">
                                                                <div class="info">
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="address-group">
                                                                        <span class="author">Jin Alkaid</span>
                                                                        <span class="email">(Default Address)</span>
                                                                    </span>
                                                                </div>
                                                                <div class="address">
                                                                    <span class="address-group">
                                                                        <span class="address1">Ung Van Khiem, Ho Chi
                                                                            Minh city, Vietnam </span>
                                                                    </span>
                                                                </div>
                                                            </address>
                                                        </div>
                                                        <div id="tool_address_1940927491" class="address_actions col-md-10">
                                                            <a href="#" onclick="HTML.CustomerAddress.toggleForm(226447297);return false"><i
                                                                    class="fa fa-edit"></i><span>Edit</span></a>
                                                            <span class="action_delete">
                                                                <a href="#" onclick="HTML.CustomerAddress.destroy(226447297);return false"
                                                                    title="remove"><i class="fa fa-times"></i><span>Delete</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="address_pagination"></div>
                                    </div>
                                </div>
                                <div class="clearfix col-md-24">
                                    <button id="new-address" class="btn" onclick="HTML.CustomerAddress.toggleNewForm();return false">Add
                                        New Address</button>
                                </div>
                                <script type="text/javascript">
                                    var HTML = new Object();
                                    HTML.CustomerAddress = {
                                        toggleForm: function (id) {
                                            var editEl = document.getElementById('edit_address_' + id);
                                            var toolEl = document.getElementById('tool_address_' + id);
                                            editEl.style.display = editEl.style.display == 'none' ? '' : 'none';
                                            toolEl.style.visibility = toolEl.style.visibility == 'hidden' ? '' : 'hidden';
                                            return false;
                                        },

                                        toggleNewForm: function () {
                                            var el = document.getElementById('add_address');
                                            el.style.display = el.style.display == 'none' ? '' : 'none';
                                            return false;
                                        },

                                        destroy: function (id, confirm_msg) {
                                            if (confirm(confirm_msg || "Are you sure you wish to delete this address?")) {
                                            }
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php include_once "footer.php" ?>
</body>