// let search_input = document.querySelector("#search_input");

// search_input.addEventListener("keyup", function(e){
//     let search_item = e.target.value.toLowerCase();
//     let show_items = document.querySelectorAll("tbody .name")

//     show_items.forEach(function(item){
//         if (item.textContent.toLowerCase().indexOf(search_item)) {
//             item.closest("tr").style.display = "";
//         }else{
//             item.closest("tr").style.display = "None";
//         }
//     })
// })

$(document).ready(function () {
  // Activate tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // Filter table rows based on searched term
  $("#search_input").on("keyup", function () {
    let term = $(this).val().toLowerCase();
    $("table tbody tr").each(function () {
      $row = $(this);
      let name = $row.find("td").text().toLowerCase();
      console.log(name);
      if (name.search(term) < 0) {
        $row.hide();
      } else {
        $row.show();
      }
    });
  });

  // // Filter table rows based on searched term
  // $("#search_resolution").on("keyup", function() {
  //     let term = $(this).val().toLowerCase();
  //     $("table tbody tr").each(function(){
  //         $row = $(this);
  //         let name = $row.find("td:nth-child(2)").text().toLowerCase();
  //         console.log(name);
  //         if(name.search(term) < 0){
  //             $row.hide();
  //         } else{
  //             $row.show();
  //         }
  //     });
  // });
});
