function tableSearch() {
            let input, filter, table, tr, td, i, txtValue;
            // инициальзация переменных (приравниваем данные входному идентификатору )
            input = document.getElementById("myInput");
            // переводим в верхний регистр
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    
                }
            }
        }

        function searchSupervisoryAuthority() {
            let input2, filter, table, tr, td, i, txtValue;
            // инициальзация переменных (приравниваем данные входному идентификатору )
            input2 = document.getElementById("myInputSupervisoryAuthority");
            // переводим в верхний регистр
            filter2 = input2.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter2) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    
                }
            }
        }

        function searchBeginningVerification() {
            let input3, filter3, table, tr, td, i, txtValue;
            // инициальзация переменных (приравниваем данные входному идентификатору )
            input3 = document.getElementById("myInputBeginningVerification");
            // переводим в верхний регистр
            filter3 = input3.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter3) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    
                }
            }
        }



        function searchEndVerification() {
            let input4, filter4, table, tr, td, i, txtValue;
            // инициальзация переменных (приравниваем данные входному идентификатору )
            input4 = document.getElementById("myInputEndVerification");
            // переводим в верхний регистр
            filter4 = input4.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter4) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    
                }
            }
        }


        function searchNumber() {
            let input5, filter5, table, tr, td, i, txtValue;
            // инициальзация переменных (приравниваем данные входному идентификатору )
            input5 = document.getElementById("myInputNumber");
            // переводим в верхний регистр
            filter5 = input5.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter5) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    
                }
            }
        }


