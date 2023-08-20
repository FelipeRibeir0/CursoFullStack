import http from './http';

async function users() {
    try {
        const {data} = await http.get("/users");
    } catch (error) {
        console.log(error);
    }
}

export default users;