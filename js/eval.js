function keepalive(cmd){
    fetch('/', {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: 'post',
        body: JSON.stringify( { "id":id } )
    }).then(
        console.log(id + " supprimé !")
    );
};