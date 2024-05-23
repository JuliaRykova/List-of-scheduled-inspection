function tableSearch(inputId, columnIndex) {
    const input = document.getElementById(inputId);
    const filter = input.value.toUpperCase();
    const table = document.getElementById("myTable");
    const tr = table.getElementsByTagName("tr");
  
    for (let i = 0; i < tr.length; i++){
      const td = tr[i].getElementsByTagName("td")[columnIndex];
      if (td) {
        const txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().includes(filter)) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  function searchByName() {
    tableSearch("myInput", 1);
  }
  
  function searchBySupervisoryAuthority() {
    tableSearch("myInputSupervisoryAuthority", 2);
  }
  
  function searchByBeginningVerification() {
    tableSearch("myInputBeginningVerification", 3);
  }
  
  function searchByEndVerification() {
    tableSearch("myInputEndVerification", 4);
  }
  
  function searchByNumber() {
    tableSearch("myInputNumber", 5);
  }
  

