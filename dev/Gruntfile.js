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
          'css/critical.concat.css' : 'scss/00_critical.scss',
          'css/critical-inline.concat.css' : 'scss/00_critical-inline.scss',
          'css/editor-style.concat.css' : 'scss/00_backend.scss'
        }
      }
    },

    cmq: {
      your_target: {
        files: {
          'css': ['css/*.concat.css']
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
        dest: '../critical.min.css'
      },
      mincriticalinline: {
        src: 'css/critical-inline.concat.css',
        dest: 'css/critical-inline.min.css'
      },
      minbackend: {
        src: 'css/editor-style.concat.css',
        dest: 'css/editor-style.concat.min.css'
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
      css2: {
        // append WordPress Theme info
        src: [
          'corry.wpinfo.css',
          '../critical.min.css'
        ],
        dest: '../critical.min.css'
      },
      css3: {
        src: [
          'corry.wpinfo.css',
          'css/editor-style.concat.min.css'
        ],
        dest: '../editor-style.css'
      },
      js : {
        src : [
          'js/custom.js'
        ],
        dest : 'js/corry.concat.js'
      }
    },

    'string-replace': {
      dist: {
        files: {
          '../header.php': 'header.php',
          'style-guide.html': 'style-guide.html',
          '../style.css': '../style.css',
          '../critical.min.css': '../critical.min.css'
        },
        options: {
          replacements: [
            {
              pattern: '<!--INJECT CRITICAL INLINE CSS HERE -->',
              replacement: "<%= grunt.file.read('css/critical-inline.min.css') %>"
            },
            {
              pattern: '<!--THEME VERSION-->',
              replacement: "<%= grunt.template.today('yy.mm.dd') %>"
            }
          ]
        }
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
  grunt.registerTask('default', ['devUpdate', 'sass', 'cmq', 'autoprefixer', 'cssmin', 'concat', 'string-replace', 'jshint', 'uglify']);

};
