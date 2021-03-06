module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            development: {
                options: {
                    paths: ["less","inc/css"]
                },
                files: {
                    "style.css": "less/style.less",
                    "inc/css/admin.css": "inc/css/admin.less"
                }
            }
        },
        autoprefixer: {
            options: {
                // Task-specific options go here.
                browsers: ['last 3 version', 'ie 8', 'ie 9']
            },
            normal: {
                // Target-specific file lists and/or options go here.
                src: 'style.css'
            },
            admin: {
                expand: true,
                flatten: true,
                src: 'inc/css/*.css', // -> src/css/file1.css, src/css/file2.css
                dest: 'inc/css/' // -> dest/css/file1.css, dest/css/file2.css
            },
        },
        watch: {
            options: {
                livereload: 1337,
            },
            less: {
                files: ['less/*.less','inc/css/*.less'],
                tasks: ['less','autoprefixer']
            },
            html: {
                files: ['*.html','*.php']
            },
            js: {
                files: ['js/*.js']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-autoprefixer');

    //grunt.registerTask('test', ['jshint', 'qunit']);

    //grunt.registerTask('default', ['jshint', 'qunit', 'concat', 'uglify']);
    grunt.registerTask('default', ['less','autoprefixer']);

};