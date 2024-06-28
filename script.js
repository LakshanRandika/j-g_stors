function signInBox() {
  var signInBox = document.getElementById("signUpBox");
  var signUpBox = document.getElementById("signInBox");

  signInBox.classList.toggle("d-none");
  signUpBox.classList.toggle("d-none");
}

function signUp() {
  var fn = document.getElementById("fname");
  var ln = document.getElementById("lname");
  var e = document.getElementById("email");
  var m = document.getElementById("mobile");
  var un = document.getElementById("username");
  var pw = document.getElementById("password");

  var form = new FormData();
  form.append("f", fn.value);
  form.append("l", ln.value);
  form.append("e", e.value);
  form.append("m", m.value);
  form.append("u", un.value);
  form.append("p", pw.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;

      if (response == "Success") {
        swal("Success!", "You clicked the button!", "success");
        window.location = "signin.php";
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "signUpProccess.php", true);
  request.send(form);
}

function signIn() {
  var un = document.getElementById("un");
  var pw = document.getElementById("pw");
  var rm = document.getElementById("rm");

  var form = new FormData();
  form.append("un", un.value);
  form.append("pw", pw.value);
  form.append("rm", rm.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      if (response == "success") {
        swal("Success!", " WELCOME!", "success");

        window.location = "index.php";
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "signinProccess.php", true);
  request.send(form);
}

function adminSignIn() {
  var un = document.getElementById("un");
  var pw = document.getElementById("pw");

  var f = new FormData();
  f.append("u", un.value);
  f.append("p", pw.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      //alert(response);

      if (response == "Success") {
        swal("Success!", " WELCOME!", "success");

        window.location = "adminDashboard.php";
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "adminSignInProcess.php", true);
  request.send(f);
}

function loadUser() {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      //alert(response);

      document.getElementById("tb").innerHTML = response;
    }
  };

  request.open("POST", "loadUserProccess.php", true);
  request.send();
}

function updateUserStatus() {
  var uid = document.getElementById("uid");

  var f = new FormData();
  f.append("u", uid.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      // alert(response);
      if (response == "deactive") {
        swal("Success!", "Deactive", "success");
        uid.value = "";
        loadUser();
      } else if (response == "active") {
        swal("Success!", "Active", "success");
        uid.value = "";
        loadUser();
      } else {
        // Other response
        swal("error!", "Invelid User Id", "error");
      }
    }
  };

  request.open("POST", "updateStatusProccess.php", true);
  request.send(f);
}

function reload() {
  location.reload();
}

function brandregister() {
  var brand = document.getElementById("brand");

  var f = new FormData();

  f.append("b", brand.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      //alert(response);
      if (response == "Success") {
        swal("Success!", response, "success");
        brand.value = "";
        loadUser();
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "brandRegisterProccess.php", true);
  request.send(f);
}

function catagery() {
  var cat = document.getElementById("cat");

  var f = new FormData();

  f.append("c", cat.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      //alert(response);
      if (response == "Success") {
        swal("Success!", response, "success");
        cat.value = "";
        loadUser();
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "catageryRegisterProccess.php", true);
  request.send(f);
}

function color() {
  var color = document.getElementById("color");

  var f = new FormData();

  f.append("co", color.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      //alert(response);
      if (response == "Success") {
        swal("Success!", response, "success");
        color.value = "";
        loadUser();
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "colorRegisterProccess.php", true);
  request.send(f);
}

function size() {
  var size = document.getElementById("size");

  var f = new FormData();

  f.append("s", size.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      //alert(response);
      if (response == "Success") {
        swal("Success!", response, "success");
        size.value = "";
        loadUser();
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "sizeRegisterProccess.php", true);
  request.send(f);
}

function regProduct() {
  // alert("ok");

  var pname = document.getElementById("pname");
  var brand = document.getElementById("brand");
  var cat = document.getElementById("cat");
  var color = document.getElementById("color");
  var size = document.getElementById("size");
  var desc = document.getElementById("desc");
  var file = document.getElementById("file");

  var form = new FormData();
  form.append("pname", pname.value);
  form.append("brand", brand.value);
  form.append("cat", cat.value);
  form.append("color", color.value);
  form.append("size", size.value);
  form.append("desc", desc.value);
  form.append("image", file.files[0]);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      var resp = req.responseText;
      if (resp == "Success") {
        swal("Success!", "Product Register Sucsess", "success");
        pname.value = "";
        brand.value = "";
        cat.value = "";
        color.value = "";
        size.value = "";
        desc.value = "";
        file.value = "";
      } else {
        swal("error!", resp, "error");
      }
    }
  };
  req.open("POST", "productRegProcess.php", true);
  req.send(form);
}

function updateStock() {
  var pname = document.getElementById("selectProduct");
  var qty = document.getElementById("qty");
  var price = document.getElementById("uprice");

  // alert(pname.value)

  var f = new FormData();
  f.append("p", pname.value);
  f.append("q", qty.value);
  f.append("up", price.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      if (response == "New Stock Added Successfully") {
        swal("Success!", "New Stock Added Successfully", "success");
        pname.value = "";
        qty.value = "";
        price.value = "";
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "updateStockProcess.php", true);
  request.send(f);
}

function loadProduct(x) {
  var page = x;
  // alert(x);

  var f = new FormData();
  f.append("p", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      // alert(response);
      document.getElementById("pid").innerHTML = response;
    }
  };

  request.open("POST", "loadProductProcess.php", true);
  request.send(f);
}

function searchProduct(x) {
  var page = x;
  var product = document.getElementById("product");

  // alert(page);
  // alert(product.value);

  var f = new FormData();
  f.append("p", product.value);
  f.append("pg", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      // alert(response);
      document.getElementById("pid").innerHTML = response;
    }
  };
  request.open("POST", "searchProductProcess.php", true);
  request.send(f);
}

function viewFilter() {
  var filterElement = document.getElementById("filterId");
  var currentClass = filterElement.className;

  if (currentClass.includes("d-block")) {
    filterElement.className = "d-none";
  } else {
    filterElement.className = "d-block";
  }
}

// advance search
function advSearchProduct() {
  // alert("ok");
  var page = x;
  var color = document.getElementById("color");
  var cat = document.getElementById("cat");
  var brand = document.getElementById("brand");
  var size = document.getElementById("size");
  var min = document.getElementById("min");
  var max = document.getElementById("max");

  var f = new FormData();
  f.append("pg", page);
  f.append("co", color.value);
  f.append("cat", cat.value);
  f.append("b", brand.value);
  f.append("s", size.value);
  f.append("min", min.value);
  f.append("max", max.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if ((r.readyState == 4) & (r.status == 200)) {
      var response = r.responseText;
      // alert(response);
      document.getElementById("pid").innerHTML = response;

      color.value = "0";
      cat.value = "0";
      brand.value = "0";
      size.value = "0";
      min.value = "";
      max.value = "";
    }
  };

  r.open("POST", "advSearchProductProcess.php", true);
  r.send(f);
}

function uploadImg() {
  var img = document.getElementById("imgUploader");

  var f = new FormData();
  f.append("i", img.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      if (response == "empty") {
        swal("Success!", "Please Select your Profile Image", "error");

        alert("");
      } else if (response !== "success") {
        swal("Success!", response, "success");
        reload();
      } else {
        swal("Success!", response, "success");
        document.getElementById("i").src = response;
        img.value = "";
      }
    }
  };

  request.open("POST", "profileImgUploadProcess.php", true);
  request.send(f);
}

function updateData() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var mobile = document.getElementById("mobile");
  var pw = document.getElementById("pw");
  var no = document.getElementById("no");
  var line1 = document.getElementById("line1");
  var line2 = document.getElementById("line2");

  var f = new FormData();
  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("e", email.value);
  f.append("m", mobile.value);
  f.append("p", pw.value);
  f.append("n", no.value);
  f.append("l1", line1.value);
  f.append("l2", line2.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      if (response == "Update Successfully") {
        swal("Success!", response, "success");
         
      
      } else {
        swal("error!", response, "error");
      }
    }
  };

  request.open("POST", "updateDataProcess.php", true);
  request.send(f);
}

function signOut() {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      swal("Success!", response, "success");
      window.location = "signin.php";
    }
  };

  request.open("POST", "signOutProcess.php");
  request.send();
}
function addtoCart(x) {
 
  var stockId = x;
  var qty = document.getElementById("qty");

  if (qty.value != "") {
   
    var f = new FormData();
    f.append("s", stockId);
    f.append("q", qty.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        swal("Success!", response, "success");
        qty.value = "";
      }
    };
    request.open("POST", "addtoCartProcess.php", true);
    request.send(f);
  } else {
    alert("Please Enter Your Quantity");
  }
}

function loadCart() {
  //alert("OK");

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      //alert(response);
      document.getElementById("cartBody").innerHTML = response;
    }
  };

  request.open("POST", "loadCartProcess.php", true);
  request.send();
}

function incrementCartQty(x) {
  //alert(x);

  var cardId = x;
  var qty = document.getElementById("qty" + x);
  //alert(qty.value);

  var newQty = parseInt(qty.value) + 1; //integer
  //alert(newQty);

  var f = new FormData();
  f.append("c", cardId);
  f.append("q", newQty);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      //alert(response);

      if (response == "Success") {
        qty.value = parseInt(qty.value) + 1;
        loadCart();
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "updateCartQtyProcess.php", true);
  request.send(f);
}

function decrementCartQty(x) {
  //alert(x);

  var cardId = x;
  var qty = document.getElementById("qty" + x);

  var newQty = parseInt(qty.value) - 1; //integer
  //alert(newQty);

  var f = new FormData();
  f.append("c", cardId);
  f.append("q", newQty);

  if (newQty > 0) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        //alert(response);

        if (response == "Success") {
          qty.value = parseInt(qty.value) - 1;
          loadCart();
        } else {
          alert(response);
        }
      }
    };

    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);
  }
}

function removeCart(x) {
  //alert(x);

  if (confirm("Are You Suer Deleting This Item?")) {
    var f = new FormData();
    f.append("c", x);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        if(response == "Item Successfully Remove from Cart"){
        
        swal("Success!", response, "success");
        reload();
        }else{
          swal("Success!", response, "error");
        }
        
      }
    };

    request.open("POST", "removeCartProcess.php", true);
    request.send(f);
  }
}

function checkOut() {
    // alert("ok");

    var f = new FormData();
    f.append("cart",true);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            // alert(responce);
            var payment = JSON.parse(responce);
            doCheckout(payment, "checkoutProcess.php");
        }
    }

    request.open("POST","paymentProcess.php",true);
    request.send(f);
}

function doCheckout(payment, path) {
    payhere.onCompleted = function onCompleted(orderId) {
        console.log("Payment completed. OrderID:" + orderId);

        var f = new FormData();
        f.append("payment", JSON.stringify(payment));

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var responce = request.responseText;
                var order = JSON.parse(responce);

                if (order.resp == "Success") {
                    console.log("Order completed with ID: " + order.order_id);
                    window.location = "invoice.php?orderId=" + order.order_id; // Fixed key name
                } else {
                    alert(responce);
                }
            }
        };

        request.open("POST", path, true);
        request.send(f);
    };

    // Payment window closed
    payhere.onDismissed = function onDismissed() {
        // Note: Prompt user to pay again or show an error page
        console.log("Payment dismissed");
    };

    // Error occurred
    payhere.onError = function onError(error) {
        // Note: show an error page
        console.log("Error:"  + error);
    };

    // Show the payhere.js popup, when "PayHere Pay" is clicked
    // document.getElementById('payhere-payment').onclick = function (e) {
        payhere.startPayment(payment);
    // };
}

function buyNow(stockId) {
    // alert(stockId);
    var qty = document.getElementById("qty");

    if (qty.value > 0) {
        
        var f = new FormData();
        f.append("cart", false);
        f.append("stockId",stockId);
        f.append("qty",qty.value);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                var responce = request.responseText;
                // alert(responce);
                var payment = JSON.parse(responce);
                payment.stock_id = stockId;
                payment.qty = qty.value;
                doCheckout(payment, "buynowProcess.php");
            }
        }

        request.open("POST","paymentProcess.php",true);
        request.send(f);
        
    } else {
        alert("Please enter valid quantity");
    }
}

function loadChart() {
    // alert("ok");
    const ctx = document.getElementById('myChart');

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            //alert(responce);
            var data = JSON.parse(responce);
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                  labels: data.labels,
                  datasets: [{
                    label: '# of Votes',
                    data: data.data,
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
            
        }
};

request.open("POST","loadChartProcess.php",true);
request.send();
}
function loadChart() {

  var ctx = document.getElementById("myChart");

  var f = new FormData();

  f.append("ctx", ctx.value)

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
      if (r.readyState == 4 && r.status == 200) {
          var t = r.responseText;
          var data = JSON.parse(t);


          new Chart(ctx, {
              type: 'doughnut',
              data: {
                  labels: data.labels,
                  datasets: [{
                      label: '# Sales',
                      data: data.data,
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });

          // alert(t);

      }
  }

  r.open("POST", "loadChartProcess.php", true);
  r.send(f);

  // alert("hello");
}

function loadChart2() {
  var ctx = document.getElementById("myChart2");
  var f = new FormData();
  f.append("ctx", ctx.value)

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
      if (r.readyState == 4 && r.status == 200) {
          var t = r.responseText;
          var data = JSON.parse(t);

          new Chart(ctx, {
              type: "line",
              data: {
                  labels: data.dates,
                  datasets: [
                      {
                          label: "Daily Income",
                          data: data.incomes,
                          borderWidth: 1,
                          fill: false,
                          borderColor: "rgb(75, 192, 192)",
                      },
                  ],
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true,
                      },
                  },
              },
          });

          document.getElementById("total-amount").innerHTML =
              "Total Amount: " + data.total_amount;
      }
  };

  r.open("POST", "loadChartProcess2.php", true);
  r.send(f);
}

function loadChart3() {

  var ctx = document.getElementById("myChart3");

  var f = new FormData();

  f.append("ctx", ctx.value)

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
      if (r.readyState == 4 && r.status == 200) {
          var t = r.responseText;
          var data = JSON.parse(t);


          new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: data.labels,
                  datasets: [{
                      label: '# Sales',
                      data: data.data,
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });

          // alert(t);

      }
  }

  r.open("POST", "loadChartProcess3.php", true);
  r.send(f);

  // alert("hello");
}

function loadChart4() {

  var ctx = document.getElementById("myChart4");

  var f = new FormData();

  f.append("ctx", ctx.value)

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
      if (r.readyState == 4 && r.status == 200) {
          var t = r.responseText;
          var data = JSON.parse(t);


          new Chart(ctx, {
              type: 'line',
              data: {
                  labels: data.labels,
                  datasets: [{
                      label: '# Sales',
                      data: data.data,
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });

          // alert(t);

      }
  }

  r.open("POST", "loadChartProcess4.php", true);
  r.send(f);

  // alert("hello");
}
