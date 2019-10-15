module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

	// Project configuration.
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
      dist: {
        options: {
          style: 'expanded',
        },
        files: {
          'css/c18.concat.css' : 'scss/c18_manifest.scss'
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version']
      },
      your_target: {
        src: 'css/c18.concat.css'
      },
    },

    cssmin: {
      minify: {
        src: 'css/c18.concat.css',
        dest: 'css/c18.min.css'
      }
    },

    concat: {
      css: {
        // append WordPress Theme info
        src: [
          'c18.wpinfo.css',
          'css/c18.min.css'
        ],
        dest: '../style.css'
      },
      js : {
        src : [
          'js/modernizr.custom.js',
          'js/custom.js'
        ],
        dest : 'js/c18.concat.js'
      }
    },

    jshint: {
      all: ['Gruntfile.js', 'js/custom.js']
    },

    uglify: {
      options: {
        mangle: false,
//        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      my_target: {
        files: {
          '../scripts.js': ['js/c18.concat.js']
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