var ppl = [
    {
        username: "henk",
        password: "Test23"
    },
    {
        username: "hans",
        password: "Test14"
    },
    {
        username: "peter",
        password: "Test46"
    }
]

function getInfo(){
    var username = document.querySelector("username").value
    var password = document.querySelector("password").value

    for(i = 0; i < ppl.length; i++){
        if(username == ppl[i].username && password == pp[i].password) {
        console.log(username + "is logged in")

        return
    }
}
    console.log("incorrect username or password")
}