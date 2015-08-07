module.exports = function(grunt) {

  grunt.initConfig({

    sass: {
      dist: {
        options: {
          style: 'compact'
        },
        files: {
          'style.css': 'styles/main.scss'
        }
      }
    },

    watch: {
      files: ['styles/*.scss'],
      tasks: ['sass']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', ['sass']);

};