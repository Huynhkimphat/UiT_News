const rules = {
    isRequired: (inputName, value) => {
      if (!value) return { message: `${inputName} is required` };
    },
    isEmail: (inputName, email) => {
      const reEmail =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      const result = reEmail.test(String(email).toLowerCase());
      if (!result) {
        return { message: `${inputName} is bad formated` };
      }
    },
    password: (inputName, password) => {
      if (password.length < 8 )
        return { message: `${inputName} required at lease 8 character` };
    },
    confirmPassword: (inputName, rootPassword, password) => {
      if (password !== rootPassword) {
        return { message: `${inputName} dont match` };
      }
    },
  };
