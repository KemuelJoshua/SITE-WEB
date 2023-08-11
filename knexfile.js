module.exports = {
    development: {
      client: 'mysql',
      connection: {
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'site-web',
      },
      migrations: {
        directory: './db/migrations', // Change this path as needed
      },
    },
  };
  