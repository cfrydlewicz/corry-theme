/*jshint esversion: 6 */
module.exports = function(grunt) {

  const sass = require('node-sass');
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    devUpdate: {
      main: {
        options: {
          updateType: 'report', // just report outdated packages
          reportUpdated: false, // don't report up-to-date packages
        }
      }
    },

    sass: {
      options: {
        implementation: sass,
        sourceMap: false,
        style: 'expanded'
      },
      dist: {
        files: {
          'css/corry.concat.css' : 'scss/00_manifest.scss',
          'css/critical.concat.css' : 'scss/00_critical.scss'
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version']
      },
      your_target: {
        src: 'css/*.concat.css'
      },
    },

    cssmin: {
      mintheme: {
        src: 'css/corry.concat.css',
        dest: 'css/corry.min.css'
      },
      mincritical: {
        src: 'css/critical.concat.css',
        dest: 'css/critical.min.css'
      }
    },

    concat: {
      css: {
        // append WordPress Theme info
        src: [
          'corry.wpinfo.css',
          'css/corry.min.css'
        ],
        dest: '../style.css'
      },
      js : {
        src : [
          'js/custom.js'
        ],
        dest : 'js/corry.concat.js'
      }
    },

    jshint: {
      all: ['Gruntfile.js', 'js/custom.js']
    },

    uglify: {
      options: {
        mangle: false,
        //banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      my_target: {
        files: {
          '../scripts.js': ['js/corry.concat.js']
        }
      }
    },

    watch: {
      files: [
        'Gruntfile.js',
        'package.json',
        'scss/*.scss',
        'js/*.js'
      ],
      tasks: ['default']
    }

  });

  // Default task(s).
  grunt.registerTask('default', ['devUpdate', 'sass', 'autoprefixer', 'cssmin', 'concat', 'jshint', 'uglify']);

};
