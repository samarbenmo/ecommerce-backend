class User {
    constructor(username, email,password,is_active,is_admin,last_login,date_joined,has_otp_service) {
        this.username = username;
        this.email = email;
        this.password = password;
        this.is_active = is_active;
        this.is_admin = is_admin;
        this.last_login = last_login;
        this.date_joined = date_joined;
        this.has_otp_service = has_otp_service;


    }


}

export default User;
