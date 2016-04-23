
#set path = ( . /usr/xmc /bin /usr/bin /usr/sbin /sbin /usr/local/bin \
#     ~/bin ~/bin/myscripts )

#set path = ( $path /sw/bin /sw/include/octave-2.1.53/octave /sw/lib )

#echo $path

set path = ( $path . ~/bin ~/bin/myscripts ~/bin/mpeg2/src/mpeg2enc/ ~/bin/mpeg2/src/mpeg2dec/ )



set MANPATH = ( /usr/man:/usr/X11R6/man:/usr/share/man:/usr/local/share/man:/scr1/dsp/GMT/man )
#set MANPATH = ( /usr/man:/usr/X11R6/man:/usr/share/man:/usr/local/share/man:/sw/lib/perl5/5.8.6/man )


set history=1000
set ignoreeof
set savehist=1000
set filec
set autologout = 20160
# that's autologout after 2 weeks (# of minutes)
set autolist

# for crontab -e
setenv EDITOR pico

# aliases
# basic aliases
alias ll        'ls -gl'
alias cp        'cp -i'
alias mv        'mv -i'
alias rm        'rm -i'
alias lo        exit
alias fi        finger
alias sp        'set prompt = "- "'
#alias del       'rm -i'
# cd alias
alias cd        'cd \!*; set prompt="$cwd\>"'
alias cdd       'cd /scr2/dsp/'
alias cdd1      'cd /scr1/dsp/'
alias cdsn      'cd /u/nordhaus/Physics/Projects/SNe_asymmetries/'
alias hci       'cd /u/ibgui/high_contrast_imaging/'
alias exodb     'cd /u/dsp/astronomy/projects/burrows/planet_database/transit_planet_code'
# ssh aliases
alias iap       'ssh -X dave@iapetus.astro.columbia.edu'
alias ven       'ssh -X dave@venus.astro.columbia.edu'
alias chi       'ssh -X dsp@chisel.astro.princeton.edu'
alias awl       'ssh -X dsp@awl.astro.princeton.edu'
alias minos     'ssh -X dsp@minos.astro.princeton.edu'
alias zen       'ssh -X dsp@zenith.astro.princeton.edu'
alias della     'ssh -X dspiegel@della.princeton.edu'
#alias emacs     'emacs -rv'
# terminal aliases
alias xterm     'xterm -bg black -fg yellow -sl 1000 -sb'
alias xgterm    'xgterm -bg black -fg yellow -sl 1000 -sb'

set prompt=$cwd\>
set noclobber

#setenv HEADAS /opt/heasoft/current/i686-pc-linux-gnu-libc2.2.4
#alias heainit "source $HEADAS/headas-init.csh"

#set PGPLOT_FONT=/scratch/dave/PGPLOT/pgplot/grfont.dat
#setenv PGPLOT_DIR /scratch/dave/PGPLOT/pgplot/   
###setenv LD_LIBRARY_PATH /scratch/dave/PGPLOT/pgplot/
#setenv PGPLOT_DEV /xwin
setenv PGPLOT_DIR /scr2/dsp/PGPLOT/pgplot/
setenv LD_LIBRARY_PATH ${LD_LIBRARY_PATH}:/scr2/dsp/PGPLOT/pgplot/

# For ssh
#ssh-add

# For matlab
#alias matlab     '/scr1/dsp/matlab71'

# For compiling with adam
alias ifort '/usr/peyton/intel/10.0/fc/bin/ifort'
source /usr/peyton/intel/10.0/cc/bin/iccvars.csh
source /usr/peyton/intel/10.0/fc/bin/ifortvars.csh
source /usr/peyton/intel/10.0/idb/bin/idbvars.csh



# For NETCDF, GMT, ferret
setenv NETCDFHOME /scr1/dsp/GMT2/netcdf-3.6.3
setenv GMTHOME    /scr1/dsp/GMT/GMT4.3.1/
setenv FERRETHOME /scr1/dsp/ferret/
setenv FER_DIR    /scr1/dsp/ferret/
setenv FER_DSETS  ${FER_DIR}/fer_dsets/
set path=(/scr1/dsp/GMT/bin $FER_DIR/bin $path)
#source $FER_DIR/ferret_paths
