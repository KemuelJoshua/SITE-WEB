/**
 * @param { import("knex").Knex } knex
 * @returns { Promise<void> }
 */
exports.up = function(knex) {
  return knex.schema.createTable('users', (table) => {
    table.increments('user_id').primary();
    table.string('username').notNullable();
    table.string('password').notNullable();
    table.string('fname').notNullable();
    table.string('lname').notNullable();
    table.string('mname').notNullable();
    table.string('position').notNullable();
    table.string('image_url').notNullable();
    table.boolean('isDelete').notNullable();
    table.timestamps(true, true);
  }) 

  .createTable('banner', (table) => {
    table.increments('banner_id').primary();
    table.string('poster_url').notNullable();
    table.boolean('isActive').notNullable();
    table.timestamps(true, true);
  })

  .createTable('carousel-image', (table) => {
    table.increments('carousel_id').primary();
    table.string('poster_url').notNullable();
    table.boolean('isDelete').notNullable();
    table.timestamps(true, true);
  })
  
  .createTable('research-info-table', (table) => {
    table.increments('research_id').primary();
    table.string('research_title').notNullable();
    table.text('abstract').notNullable();
    table.string('git_repository').notNullable();
    table.string('research_pdf').notNullable();
    table.date('research_date').notNullable();
    table.boolean('isDelete').notNullable();
    table.timestamps(true, true);
  })

  .createTable('research-author-table', (table)=> {
    table.increments('author_id').primary();
    table.integer('research_id').unsigned()
    .references('research_id')
    .inTable('research-info-table')
    .onDelete('CASCADE');
    table.string('poster_url').notNullable();
    table.string('author_fullname').notNullable();
    table.text('author_description').notNullable();
  })

  .createTable('research-image-table', (table) => {
    table.increments('image_id').primary();
    table.integer('research_id').unsigned()
    .references('research_id')
    .inTable('research-info-table')
    .onDelete('CASCADE');
    table.string('poster_url').notNullable();
  })

  .createTable('category', (table)=> {
    table.increments('category_id').notNullable();
    table.string('category_name').notNullable();
    table.boolean('isDelete').notNullable();
    table.timestamps(true, true);
  })

  .createTable('news-table', (table) => {
    table.increments('news_id').primary();
    table.string('news_title').notNullable();
    table.integer('category_id').unsigned()
    .references('category_id')
    .inTable('category')
    .onDelete('CASCADE');
    table.text('description').notNullable();
    table.date('news_date').notNullable();
    table.string('poster_url').notNullable();
    table.boolean('isDelete').notNullable();
    table.timestamps(true, true);
  })

  .createTable('news-image-table', (table) => {
    table.increments('news_img_id').primary();
    table.integer('news_id').unsigned()
    .references('news_id').inTable('news-table').onDelete('CASCADE');
    table.string('poster_url').notNullable();
  })

  .createTable('officers-list-table', (table) => {
    table.increments('officer_id').primary();
    table.string('poster_url').notNullable();
    table.string('position').notNullable();
    table.string('school_year').notNullable();
    table.boolean('isDelete').notNullable();
    table.timestamps(true, true);
  })

  .createTable('faculty-list-table', (table) => {
    table.increments('faculty_id').primary();
    table.string('poster_url').notNullable();
    table.string('position').notNullable();
    table.boolean('isDelete').notNullable();
    table.timestamps(true, true);
  })

    .createTable('alumni-testimonial-table', (table) => {
        table.increments('alumni_id').primary();
        table.date('testimonial_date').notNullable();
        table.string('testimonial_title').notNullable();
        table.text('fullname').notNullable();
        table.string('poster_url').notNullable();
  })

};

/**
 * @param { import("knex").Knex } knex
 * @returns { Promise<void> }
 */
exports.down = function(knex) {
  
};
