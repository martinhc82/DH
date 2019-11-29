var estudiante = {
  nombre : 'Martin',
  curso : 'diseño',
  dni : '28045678',
  email : 'martin@mail.com',
}

function fromObjectToArray(objeto){
  var miArray = [];
  for (var prop in objeto){
    miArray[prop] = objeto[prop];
  }
  return miArray;

}
console.log(fromObjectToArray(estudiante));
