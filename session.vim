let SessionLoad = 1
if &cp | set nocp | endif
let s:cpo_save=&cpo
set cpo&vim
inoremap <silent> <S-Tab> =BackwardsSnippet()
inoremap <Plug>TComment-9 :call tcomment#SetOption("count", 9)
inoremap <Plug>TComment-8 :call tcomment#SetOption("count", 8)
inoremap <Plug>TComment-7 :call tcomment#SetOption("count", 7)
inoremap <Plug>TComment-6 :call tcomment#SetOption("count", 6)
inoremap <Plug>TComment-5 :call tcomment#SetOption("count", 5)
inoremap <Plug>TComment-4 :call tcomment#SetOption("count", 4)
inoremap <Plug>TComment-3 :call tcomment#SetOption("count", 3)
inoremap <Plug>TComment-2 :call tcomment#SetOption("count", 2)
inoremap <Plug>TComment-1 :call tcomment#SetOption("count", 1)
inoremap <Plug>TComment-s :TCommentAs =&ft_
inoremap <Plug>TComment-n :TCommentAs =&ft 
inoremap <Plug>TComment-a :TCommentAs 
inoremap <Plug>TComment-b :TCommentBlock mode=#
inoremap <Plug>TComment-i v:TCommentInline mode=#
inoremap <Plug>TComment-r :TCommentRight
inoremap <Plug>TComment-  :TComment 
inoremap <Plug>TComment-p :norm! m`vip:TComment``
inoremap <Plug>TComment- :TComment
inoremap <Plug>(emmet-anchorize-summary) =emmet#util#closePopup()=emmet#anchorizeURL(1)
inoremap <Plug>(emmet-anchorize-url) =emmet#util#closePopup()=emmet#anchorizeURL(0)
inoremap <Plug>(emmet-remove-tag) =emmet#util#closePopup()=emmet#removeTag()
inoremap <Plug>(emmet-split-join-tag) :call emmet#splitJoinTag()
inoremap <Plug>(emmet-toogle-comment) =emmet#util#closePopup()=emmet#toggleComment()
inoremap <Plug>(emmet-image-size) =emmet#util#closePopup()=emmet#imageSize()
inoremap <Plug>(emmet-move-prev) :call emmet#moveNextPrev(1)
inoremap <Plug>(emmet-move-next) :call emmet#moveNextPrev(0)
inoremap <Plug>(emmet-balance-tag-outword) :call emmet#balanceTag(-1)
inoremap <Plug>(emmet-balance-tag-inward) :call emmet#balanceTag(1)
inoremap <Plug>(emmet-update-tag) =emmet#util#closePopup()=emmet#updateTag()
inoremap <Plug>(emmet-expand-word) =emmet#util#closePopup()=emmet#expandAbbr(1,"")
inoremap <Plug>(emmet-expand-abbr) =emmet#util#closePopup()=emmet#expandAbbr(0,"")
snoremap <silent> 	 i<Right>=TriggerSnippet()
map  :bwipeout
snoremap  b<BS>
vmap c <Plug>(emmet-code-pretty)
vmap m <Plug>(emmet-merge-lines)
nmap A <Plug>(emmet-anchorize-summary)
nmap a <Plug>(emmet-anchorize-url)
nmap k <Plug>(emmet-remove-tag)
nmap j <Plug>(emmet-split-join-tag)
nmap / <Plug>(emmet-toogle-comment)
nmap i <Plug>(emmet-image-size)
nmap N <Plug>(emmet-move-prev)
nmap n <Plug>(emmet-move-next)
vmap D <Plug>(emmet-balance-tag-outword)
nmap D <Plug>(emmet-balance-tag-outword)
vmap d <Plug>(emmet-balance-tag-inward)
nmap d <Plug>(emmet-balance-tag-inward)
nmap u <Plug>(emmet-update-tag)
nmap ; <Plug>(emmet-expand-word)
vmap , <Plug>(emmet-expand-abbr)
nmap , <Plug>(emmet-expand-abbr)
nmap 9 <Plug>TComment-9
nmap 8 <Plug>TComment-8
nmap 7 <Plug>TComment-7
nmap 6 <Plug>TComment-6
nmap 5 <Plug>TComment-5
nmap 4 <Plug>TComment-4
nmap 3 <Plug>TComment-3
nmap 2 <Plug>TComment-2
nmap 1 <Plug>TComment-1
nmap  <Plug>TComment-
vmap 9 <Plug>TComment-9
omap 9 <Plug>TComment-9
vmap 8 <Plug>TComment-8
omap 8 <Plug>TComment-8
vmap 7 <Plug>TComment-7
omap 7 <Plug>TComment-7
vmap 6 <Plug>TComment-6
omap 6 <Plug>TComment-6
vmap 5 <Plug>TComment-5
omap 5 <Plug>TComment-5
vmap 4 <Plug>TComment-4
omap 4 <Plug>TComment-4
vmap 3 <Plug>TComment-3
omap 3 <Plug>TComment-3
vmap 2 <Plug>TComment-2
omap 2 <Plug>TComment-2
vmap 1 <Plug>TComment-1
omap 1 <Plug>TComment-1
map ca <Plug>TComment-ca
map cc <Plug>TComment-cc
map s <Plug>TComment-s
map n <Plug>TComment-n
map a <Plug>TComment-a
map b <Plug>TComment-b
map i <Plug>TComment-i
map r <Plug>TComment-r
map   <Plug>TComment- 
map p <Plug>TComment-p
vmap  <Plug>TComment-
omap  <Plug>TComment-
snoremap % b<BS>%
snoremap ' b<BS>'
map ,t :FufTag
map ,b :FufBuffer
map ,f :FufFile
map ,W :wa!
map ,w :w!
map ,u :source /etc/vim/vimrc:echo " Done! vimrc file reloaded!"
snoremap U b<BS>U
vmap [% [%m'gv``
nmap \__ <Plug>TComment-\__
smap \__ <Plug>TComment-\__
snoremap \ b<BS>\
map \_s <Plug>TComment-\_s
map \_n <Plug>TComment-\_n
map \_a <Plug>TComment-\_a
map \_b <Plug>TComment-\_b
map \_r <Plug>TComment-\_r
xmap \_i <Plug>TComment-\_i
map \_  <Plug>TComment-\_ 
map \_p <Plug>TComment-\_p
xmap \__ <Plug>TComment-\__
omap \__ <Plug>TComment-\__
map \nt :NERDTreeToggle
nnoremap \t :FufTag
nnoremap \b :FufBuffer
nnoremap \f :FufFile
noremap \W :wa!
noremap \w :w!
noremap \u :call PhpInsertUse()
noremap \e :call PhpExpandClass()
vmap ]% ]%m'gv``
snoremap ^ b<BS>^
snoremap ` b<BS>`
vmap a% [%v]%
vmap gx <Plug>NetrwBrowseXVis
nmap gx <Plug>NetrwBrowseX
xmap g> <Plug>TComment-Comment
nmap <silent> g>b <Plug>TComment-Commentb
nmap <silent> g>c <Plug>TComment-Commentc
nmap <silent> g> <Plug>TComment-Comment
xmap g< <Plug>TComment-Uncomment
nmap <silent> g<b <Plug>TComment-Uncommentb
nmap <silent> g<c <Plug>TComment-Uncommentc
nmap <silent> g< <Plug>TComment-Uncomment
xmap gc <Plug>TComment-gc
nmap <silent> gcb <Plug>TComment-gcb
nmap <silent> gcc <Plug>TComment-gcc
nmap <silent> gc9 <Plug>TComment-gc9
nmap <silent> gc8 <Plug>TComment-gc8
nmap <silent> gc7 <Plug>TComment-gc7
nmap <silent> gc6 <Plug>TComment-gc6
nmap <silent> gc5 <Plug>TComment-gc5
nmap <silent> gc4 <Plug>TComment-gc4
nmap <silent> gc3 <Plug>TComment-gc3
nmap <silent> gc2 <Plug>TComment-gc2
nmap <silent> gc1 <Plug>TComment-gc1
nmap <silent> gc <Plug>TComment-gc
omap ic <Plug>TComment-ic
vmap ic <Plug>TComment-ic
nnoremap <Plug>TComment-9 :call tcomment#SetOption("count", 9)
nnoremap <Plug>TComment-8 :call tcomment#SetOption("count", 8)
nnoremap <Plug>TComment-7 :call tcomment#SetOption("count", 7)
nnoremap <Plug>TComment-6 :call tcomment#SetOption("count", 6)
nnoremap <Plug>TComment-5 :call tcomment#SetOption("count", 5)
nnoremap <Plug>TComment-4 :call tcomment#SetOption("count", 4)
nnoremap <Plug>TComment-3 :call tcomment#SetOption("count", 3)
nnoremap <Plug>TComment-2 :call tcomment#SetOption("count", 2)
nnoremap <Plug>TComment-1 :call tcomment#SetOption("count", 1)
nnoremap <Plug>TComment-\__ :TComment
snoremap <Plug>TComment-\__ :TComment
nnoremap <Plug>TComment- :TComment
noremap <Left> <Nop>
noremap <Right> <Nop>
snoremap <BS> b<BS>
snoremap <silent> <S-Tab> i<Right>=BackwardsSnippet()
vnoremap <silent> <Plug>NetrwBrowseXVis :call netrw#BrowseXVis()
nnoremap <silent> <Plug>NetrwBrowseX :call netrw#BrowseX(expand((exists("g:netrw_gx")? g:netrw_gx : '<cfile>')),netrw#CheckIfRemote())
nnoremap <silent> <Plug>TComment-gc9c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 9) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc8c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 8) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc7c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 7) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc6c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 6) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc5c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 5) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc4c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 4) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc3c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 3) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc2c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 2) | set opfunc=tcomment#Operatorg@
nnoremap <silent> <Plug>TComment-gc1c :let w:tcommentPos = getpos(".") | call tcomment#SetOption("count", 1) | set opfunc=tcomment#Operatorg@
vnoremap <Plug>TComment-9 :call tcomment#SetOption("count", 9)
onoremap <Plug>TComment-9 :call tcomment#SetOption("count", 9)
vnoremap <Plug>TComment-8 :call tcomment#SetOption("count", 8)
onoremap <Plug>TComment-8 :call tcomment#SetOption("count", 8)
vnoremap <Plug>TComment-7 :call tcomment#SetOption("count", 7)
onoremap <Plug>TComment-7 :call tcomment#SetOption("count", 7)
vnoremap <Plug>TComment-6 :call tcomment#SetOption("count", 6)
onoremap <Plug>TComment-6 :call tcomment#SetOption("count", 6)
vnoremap <Plug>TComment-5 :call tcomment#SetOption("count", 5)
onoremap <Plug>TComment-5 :call tcomment#SetOption("count", 5)
vnoremap <Plug>TComment-4 :call tcomment#SetOption("count", 4)
onoremap <Plug>TComment-4 :call tcomment#SetOption("count", 4)
vnoremap <Plug>TComment-3 :call tcomment#SetOption("count", 3)
onoremap <Plug>TComment-3 :call tcomment#SetOption("count", 3)
vnoremap <Plug>TComment-2 :call tcomment#SetOption("count", 2)
onoremap <Plug>TComment-2 :call tcomment#SetOption("count", 2)
vnoremap <Plug>TComment-1 :call tcomment#SetOption("count", 1)
onoremap <Plug>TComment-1 :call tcomment#SetOption("count", 1)
nnoremap <silent> <Plug>TComment-gc :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | let w:tcommentPos = getpos(".") | set opfunc=tcomment#Operatorg@
xnoremap <Plug>TComment-gc :TCommentMaybeInline
nnoremap <silent> <Plug>TComment-gcb :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | let w:tcommentPos = getpos(".") | call tcomment#SetOption("mode_extra", "B") | set opfunc=tcomment#OperatorLineg@
nnoremap <silent> <Plug>TComment-gcc :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | let w:tcommentPos = getpos(".") | set opfunc=tcomment#OperatorLineg@$
noremap <Plug>TComment-ic :call tcomment#TextObjectInlineComment()
xnoremap <silent> <Plug>TComment-Comment :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | '<,'>TCommentMaybeInline!
nnoremap <silent> <Plug>TComment-Commentb :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | call tcomment#SetOption("mode_extra", "B") | let w:tcommentPos = getpos(".") | set opfunc=tcomment#OperatorLineg@
nnoremap <silent> <Plug>TComment-Commentc :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | let w:tcommentPos = getpos(".") | set opfunc=tcomment#OperatorLineAnywayg@$
nnoremap <silent> <Plug>TComment-Comment :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | let w:tcommentPos = getpos(".") | set opfunc=tcomment#OperatorAnywayg@
xnoremap <silent> <Plug>TComment-Uncomment :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | call tcomment#SetOption("mode_extra", "U") | '<,'>TCommentMaybeInline
nnoremap <silent> <Plug>TComment-Uncommentb :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | call tcomment#SetOption("mode_extra", "UB") | let w:tcommentPos = getpos(".") | set opfunc=tcomment#OperatorLineg@
nnoremap <silent> <Plug>TComment-Uncommentc :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | call tcomment#SetOption("mode_extra", "U") | let w:tcommentPos = getpos(".") | set opfunc=tcomment#OperatorLineAnywayg@$
nnoremap <silent> <Plug>TComment-Uncomment :if v:count > 0 | call tcomment#SetOption("count", v:count) | endif | call tcomment#SetOption("mode_extra", "U") | let w:tcommentPos = getpos(".") | set opfunc=tcomment#OperatorAnywayg@
noremap <Plug>TComment-\_s :TCommentAs =&ft_
noremap <Plug>TComment-\_n :TCommentAs =&ft 
noremap <Plug>TComment-\_a :TCommentAs 
noremap <Plug>TComment-\_b :TCommentBlock
noremap <Plug>TComment-\_r :TCommentRight
xnoremap <Plug>TComment-\_i :TCommentInline
noremap <Plug>TComment-\_  :TComment 
noremap <Plug>TComment-\_p vip:TComment
xnoremap <Plug>TComment-\__ :TCommentMaybeInline
onoremap <Plug>TComment-\__ :TComment
noremap <Plug>TComment-ca :call tcomment#SetOption("as", input("Comment as: ", &filetype, "customlist,tcomment#Complete"))
noremap <Plug>TComment-cc :call tcomment#SetOption("count", v:count1)
noremap <Plug>TComment-s :TCommentAs =&ft_
noremap <Plug>TComment-n :TCommentAs =&ft 
noremap <Plug>TComment-a :TCommentAs 
noremap <Plug>TComment-b :TCommentBlock
noremap <Plug>TComment-i v:TCommentInline mode=I#
noremap <Plug>TComment-r :TCommentRight
noremap <Plug>TComment-  :TComment 
noremap <Plug>TComment-p m`vip:TComment``
vnoremap <Plug>TComment- :TCommentMaybeInline
onoremap <Plug>TComment- :TComment
vnoremap <Plug>(emmet-code-pretty) :call emmet#codePretty()
vnoremap <Plug>(emmet-merge-lines) :call emmet#mergeLines()
nnoremap <Plug>(emmet-anchorize-summary) :call emmet#anchorizeURL(1)
nnoremap <Plug>(emmet-anchorize-url) :call emmet#anchorizeURL(0)
nnoremap <Plug>(emmet-remove-tag) :call emmet#removeTag()
nnoremap <Plug>(emmet-split-join-tag) :call emmet#splitJoinTag()
nnoremap <Plug>(emmet-toogle-comment) :call emmet#toggleComment()
nnoremap <Plug>(emmet-image-size) :call emmet#imageSize()
nnoremap <Plug>(emmet-move-prev) :call emmet#moveNextPrev(1)
nnoremap <Plug>(emmet-move-next) :call emmet#moveNextPrev(0)
vnoremap <Plug>(emmet-balance-tag-outword) :call emmet#balanceTag(-2)
nnoremap <Plug>(emmet-balance-tag-outword) :call emmet#balanceTag(-1)
vnoremap <Plug>(emmet-balance-tag-inward) :call emmet#balanceTag(2)
nnoremap <Plug>(emmet-balance-tag-inward) :call emmet#balanceTag(1)
nnoremap <Plug>(emmet-update-tag) :call emmet#updateTag()
nnoremap <Plug>(emmet-expand-word) :call emmet#expandAbbr(1,"")
vnoremap <Plug>(emmet-expand-abbr) :call emmet#expandAbbr(2,"")
nnoremap <Plug>(emmet-expand-abbr) :call emmet#expandAbbr(3,"")
map <F5> :buffers
map <M-F12> :b22
map <M-F11> :b21
map <M-F10> :b20
map <M-F9> :b19
map <M-F8> :b18
map <M-F7> :b17
map <M-F6> :b16
map <M-F5> :b15
map <M-F4> :b14
map <M-F3> :b13
map <M-F2> :b12
map <M-F1> :b11
map <F10> :w!
nmap <F4> :!ctags -R --fields=+aimS --languages=php .
nmap <F12> :!ctags -R --PHP-kinds=+cf .
noremap <Down> <Nop>
noremap <Up> <Nop>
map <C-F12> :!ctags -R --sort=yes --c++-kinds=+p --fields=+iaS --extra=+q .
inoremap <silent> 	 =TriggerSnippet()
inoremap <silent> 	 =ShowAvailableSnips()
imap A <Plug>(emmet-anchorize-summary)
imap a <Plug>(emmet-anchorize-url)
imap k <Plug>(emmet-remove-tag)
imap j <Plug>(emmet-split-join-tag)
imap / <Plug>(emmet-toogle-comment)
imap i <Plug>(emmet-image-size)
imap N <Plug>(emmet-move-prev)
imap n <Plug>(emmet-move-next)
imap D <Plug>(emmet-balance-tag-outword)
imap d <Plug>(emmet-balance-tag-inward)
imap u <Plug>(emmet-update-tag)
imap ; <Plug>(emmet-expand-word)
imap , <Plug>(emmet-expand-abbr)
imap 9 <Plug>TComment-9
imap 8 <Plug>TComment-8
imap 7 <Plug>TComment-7
imap 6 <Plug>TComment-6
imap 5 <Plug>TComment-5
imap 4 <Plug>TComment-4
imap 3 <Plug>TComment-3
imap 2 <Plug>TComment-2
imap 1 <Plug>TComment-1
imap s <Plug>TComment-s
imap n <Plug>TComment-n
imap a <Plug>TComment-a
imap b <Plug>TComment-b
imap i <Plug>TComment-i
imap r <Plug>TComment-r
imap   <Plug>TComment- 
imap p <Plug>TComment-p
imap  <Plug>TComment-
inoremap " ""<Left>
inoremap ' ''<Left>
inoremap ( ()<Left>
map ° :b10
map ¹ :b9
map ¸ :b8
map · :b7
map ¶ :b6
map µ :b5
map ´ :b4
map ³ :b3
map ² :b2
map ± :b1
inoremap [ []<Left>
inoremap \w :w!
inoremap \W :wa!
inoremap \u :call PhpInsertUse()
inoremap \e :call PhpExpandClass()
inoremap { {}<Left>
cabbr strip_tags %s#<[^>]\+>##g
cabbr hlword let @/=""
cabbr hlclear let @/=''
cabbr tcomment TComment
cabbr ntreeclose NERDTreeClose
cabbr ntreeopen NERDTree
cabbr ntreec NERDTreeClose
cabbr ntreeo NERDTree
cabbr nerdtree NERDTreeToggle
cabbr NERDTREE NERDTreeToggle
cabbr nerdTree NERDTreeToggle
cabbr nTREE NERDTreeToggle
cabbr Ntree NERDTreeToggle
cabbr NTREE NERDTreeToggle
cabbr ntree NERDTreeToggle
cabbr Wqall wqall
cabbr wQALL wqall
cabbr WQALL wqall
cabbr qALL qall
cabbr Qall qall
cabbr QALL qall
cabbr wALL wall
cabbr Wall wall
cabbr WALL wall
cabbr wA wa
cabbr WA wa
cabbr Wa wa
cabbr WQ wq
cabbr wQ wq
cabbr Wq wq
cabbr Pwd pwd
cabbr PWD pwd
cabbr Bd bd
cabbr BD bd
cabbr lS ls
cabbr Ls ls
cabbr LS ls
cabbr B b
cabbr Q q
cabbr W w
iabbr iiws http://estefanio.com.br
iabbr iim estefanions@gmail.com
iabbr iifn Estefanio Nunes dos Santos
iabbr iinm Estefanio NS <estefanions@gmail.com>
let &cpo=s:cpo_save
unlet s:cpo_save
set autoindent
set background=dark
set comments=s1:/*,mb:*,ex:*/,://,:#
set completeopt=longest,menuone
set copyindent
set expandtab
set fileencodings=ucs-bom,utf-8,default,latin1
set helplang=en
set hidden
set hlsearch
set incsearch
set mouse=a
set operatorfunc=tcomment#OperatorLine
set regexpengine=1
set ruler
set shiftwidth=4
set showcmd
set showmatch
set smartcase
set softtabstop=4
set noswapfile
set tabstop=4
set nowritebackup
let s:so_save = &so | let s:siso_save = &siso | set so=0 siso=0
let v:this_session=expand("<sfile>:p")
silent only
cd ~/MEGAsync/Htdocs/ibgen/tinder_web
if expand('%') == '' && !&modified && line('$') <= 1 && getline(1) == ''
  let s:wipebuf = bufnr('%')
endif
set shortmess=aoO
badd +23 app/View/_layout.php
badd +12 app/Controller/Logoff.php
badd +47 web/common/zunicss/css/style.css
badd +23 web/common/css/custom.css
badd +9 app/View/sign_in.php
badd +60 app/Controller/Sign/Up.php
badd +40 app/Controller/Sign/In.php
badd +6 web/index.php
badd +9 app/Config/constant.php
badd +3 app/Model/DriverManager.php
badd +10 app/Model/Contract/DriverManagerInterface.php
badd +87 app/Model/DAO/ProfileDAO.php
badd +50 app/View/sign_up_insert.php
badd +98 app/View/sign_up_update.php
badd +69 app/Lib/Upload.php
badd +1 app/Model/ProfileFormInsert.php
badd +123 app/Model/DTO/ProfileDTO.php
badd +7 vendor/senun/widget-form/Senun/Widget/Form/Radio.php
badd +6 app/Model/ProfileFormUpdate.php
badd +31 app/View/people.php
badd +11 app/Lib/Session.php
badd +34 app/Controller/Index.php
argglobal
silent! argdel *
argadd app/View/_layout.php
argadd app/Controller/Logoff.php
argadd web/common/zunicss/css/style.css
edit app/View/people.php
set splitbelow splitright
set nosplitbelow
set nosplitright
wincmd t
set winheight=1 winwidth=1
argglobal
edit app/View/people.php
nnoremap <buffer> <silent>  :call phpcomplete#JumpToDefinition('vsplit')
nnoremap <buffer> <silent>  :call phpcomplete#JumpToDefinition('split')
nnoremap <buffer> <silent>  :call phpcomplete#JumpToDefinition('normal')
onoremap <buffer> <silent> [[ ?\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)?:nohls
nnoremap <buffer> <silent> [[ ?\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)?:nohls
onoremap <buffer> <silent> ]] /\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)/:nohls
nnoremap <buffer> <silent> ]] /\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)/:nohls
setlocal keymap=
setlocal noarabic
setlocal noautoindent
setlocal backupcopy=
setlocal balloonexpr=
setlocal nobinary
setlocal nobreakindent
setlocal breakindentopt=
setlocal bufhidden=
setlocal buflisted
setlocal buftype=
setlocal nocindent
setlocal cinkeys=0{,0},0),:,0#,!^F,o,O,e
setlocal cinoptions=
setlocal cinwords=if,else,while,do,for,switch
setlocal colorcolumn=
setlocal comments=s1:/*,mb:*,ex:*/,://,:#
setlocal commentstring=/*%s*/
setlocal complete=.,w,b,u,t,i
setlocal concealcursor=
setlocal conceallevel=0
setlocal completefunc=
setlocal copyindent
setlocal cryptmethod=
setlocal nocursorbind
setlocal nocursorcolumn
set cursorline
setlocal cursorline
setlocal define=
setlocal dictionary=
setlocal nodiff
setlocal equalprg=
setlocal errorformat=
setlocal expandtab
if &filetype != 'php.html'
setlocal filetype=php.html
endif
setlocal fixendofline
setlocal foldcolumn=0
setlocal foldenable
setlocal foldexpr=0
setlocal foldignore=#
setlocal foldlevel=0
setlocal foldmarker={{{,}}}
setlocal foldmethod=manual
setlocal foldminlines=1
setlocal foldnestmax=20
setlocal foldtext=foldtext()
setlocal formatexpr=
setlocal formatoptions=qrocb
setlocal formatlistpat=^\\s*\\d\\+[\\]:.)}\\t\ ]\\s*
setlocal grepprg=
setlocal iminsert=2
setlocal imsearch=2
setlocal include=\\(require\\|include\\)\\(_once\\)\\?
setlocal includeexpr=
setlocal indentexpr=GetPhpIndent()
setlocal indentkeys=0{,0},0),0],:,!^F,o,O,e,*<Return>,=?>,=<?,=*/
setlocal noinfercase
setlocal iskeyword=@,48-57,_,192-255,$
setlocal keywordprg=
set linebreak
setlocal linebreak
setlocal nolisp
setlocal lispwords=
setlocal nolist
setlocal makeprg=
setlocal matchpairs=(:),{:},[:],<:>
setlocal modeline
setlocal modifiable
setlocal nrformats=bin,octal,hex
set number
setlocal number
setlocal numberwidth=4
setlocal omnifunc=phpcomplete#CompletePHP
setlocal path=
setlocal nopreserveindent
setlocal nopreviewwindow
setlocal quoteescape=\\
setlocal noreadonly
setlocal norelativenumber
setlocal norightleft
setlocal rightleftcmd=search
setlocal noscrollbind
setlocal shiftwidth=4
setlocal noshortname
setlocal nosmartindent
setlocal softtabstop=4
setlocal nospell
setlocal spellcapcheck=[.?!]\\_[\\])'\"\	\ ]\\+
setlocal spellfile=
setlocal spelllang=en
setlocal statusline=
setlocal suffixesadd=
setlocal noswapfile
setlocal synmaxcol=3000
if &syntax != 'php.html'
setlocal syntax=php.html
endif
setlocal tabstop=4
setlocal tagcase=
setlocal tags=
setlocal textwidth=0
setlocal thesaurus=
setlocal noundofile
setlocal undolevels=-123456
setlocal nowinfixheight
setlocal nowinfixwidth
setlocal wrap
setlocal wrapmargin=0
silent! normal! zE
let s:l = 9 - ((4 * winheight(0) + 19) / 38)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
9
normal! 0100|
tabnext 1
if exists('s:wipebuf')
  silent exe 'bwipe ' . s:wipebuf
endif
unlet! s:wipebuf
set winheight=1 winwidth=20 shortmess=filnxtToO
let s:sx = expand("<sfile>:p:r")."x.vim"
if file_readable(s:sx)
  exe "source " . fnameescape(s:sx)
endif
let &so = s:so_save | let &siso = s:siso_save
doautoall SessionLoadPost
unlet SessionLoad
" vim: set ft=vim :
