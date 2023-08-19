axios.defaults.headers = {
    "Content-type":"application/json",
    HTTP_X_REQUESTED_WITH: "XMLHttpRequest",
}

async function loadUsers() {
    try {
        const {data} = await axios.get("/users");
        console.log(data);
    } catch (error) {
        console.log(error);
    }
}

loadUsers();