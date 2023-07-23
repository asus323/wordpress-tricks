let userNameHash= document.querySelectorAll(".auction-history-table .username");
let selectName = userNameHash[0].innerHTML.toString()
userNameHash[0].innerHTML = `${selectName.substring(0,1)}***${selectName.substring(selectName.length -1)}`
