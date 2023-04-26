function user_detail(){
        return fetch("http://13.233.174.141/data1.php")
                .then((response)=> response.json())
                .then((data)=> {

                    const tableBody = document.getElementById('table-body');
                        tableBody.innerHTML="";
                    data.forEach(item =>{
                    const row = tableBody.insertRow();
                    const first_name = row.insertcell();
                    const last_name = row.insertcell();
                    const email = row.insertcell();
                    const gender = row.insertcell();
                    const mobile = row.insertcell();

                    first_name.textContent = item.first_name;
                    last_name.textContent = item.last_name;
                    email.textContent = item.email;
                    gender.textContent = item.gender;
                    mobile.textContent = item.mobile;
                    });
                    });
