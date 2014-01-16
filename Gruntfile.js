/*global module:false*/
module.exports = function (grunt) {

  grunt.initConfig({
    less: {
      development: {
        files: {
          "css/main.css": "less/main.less"
        }
      },
      production: {
        options: {
          compress: true
        },
        files: {
          "css/main.css": "less/main.less"
        }
      }
    },

    /*
      Watch less files
    */
    watch: {
      styles: {
        files: 'less/*.less',
        tasks: ['less:development']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask('default', 'less:development');

};
