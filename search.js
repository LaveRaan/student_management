function searchStudent(){

let input = document.getElementById("search").value.toLowerCase();

let table = document.getElementById("studentTable");

let rows = table.getElementsByTagName("tr");

for(let i=1;i<rows.length;i++){

let cells = rows[i].getElementsByTagName("td");

let found = false;

for(let j=0;j<cells.length;j++){

if(cells[j].innerText.toLowerCase().includes(input)){
found = true;
}

}

if(found){
rows[i].style.display="";
}else{
rows[i].style.display="none";
}

}

}