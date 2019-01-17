
<!--
2018/1/21 Aroz Mirror Edit Project


-->
<html>
<head>
<title>ArOZ 7z</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../script/tocas/tocas.css">
<script src="../script/tocas/tocas.js"></script>
<script src="../script/jquery.min.js"></script>
</head>
<body>
<br><br><br><br><br>
<div class="ts text container">
<div id="maindiv" class="ts segment">
	<div id="first" class="ts top attached tabbed menu">
		<a class="active item" data-tab="Premission">Premission</a>
		<a class="item" data-tab="License">License</a>
	</div>
	<div data-tab="Premission" class="ts active bottom attached tab segment">
		<h4><i class="caution sign icon"></i>ArOZ Module Warning</h4>
		<h6>Module Directory: 7-Zip File Manager</h6>
		<p>This function might need Serval permission.
		<br>If you proceed to the module, it means you have agreed to give the module the following permissions:</p>
		<div class="ts secondary segment">
			<p><i class="checkmark icon"></i>Read data into ArOZ Directory</p>
			<p><i class="checkmark icon"></i>Write data into ArOZ Directory</p>
			<p><i class="checkmark icon"></i>Create File Assoications</p>
			<p><i class="checkmark icon"></i>Execute shell script on server</p>
		</div>
		<p>ArOZ Online BETA System cannot ensure your data is secured during the connection.
		<br>Please use this module with your own risk.
		</p>
	</div>
	<div data-tab="License" class="ts bottom attached tab segment">
		<h4>Module License</h4>
		<div class="ts horizontal form">
			<div class="field" style="padding-left: 0 !important">
				<textarea rows="19">  7-Zip
  ~~~~~
  License for use and distribution
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

  7-Zip Copyright (C) 1999-2018 Igor Pavlov.

  The licenses for files are:

    1) 7z.dll:
         - The "GNU LGPL" as main license for most of the code
         - The "GNU LGPL" with "unRAR license restriction" for some code
         - The "BSD 3-clause License" for some code
    2) All other files: the "GNU LGPL".

  Redistributions in binary form must reproduce related license information from this file.

  Note:
    You can use 7-Zip on any computer, including a computer in a commercial
    organization. You don't need to register or pay for 7-Zip.


  GNU LGPL information
  --------------------

    This library is free software; you can redistribute it and/or
    modify it under the terms of the GNU Lesser General Public
    License as published by the Free Software Foundation; either
    version 2.1 of the License, or (at your option) any later version.

    This library is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
    Lesser General Public License for more details.

    You can receive a copy of the GNU Lesser General Public License from
    http://www.gnu.org/




  BSD 3-clause License
  --------------------

    The "BSD 3-clause License" is used for the code in 7z.dll that implements LZFSE data decompression.
    That code was derived from the code in the "LZFSE compression library" developed by Apple Inc,
    that also uses the "BSD 3-clause License":

    ----
    Copyright (c) 2015-2016, Apple Inc. All rights reserved.

    Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

    1.  Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

    2.  Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer
        in the documentation and/or other materials provided with the distribution.

    3.  Neither the name of the copyright holder(s) nor the names of any contributors may be used to endorse or promote products derived
        from this software without specific prior written permission.

    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
    LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
    COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
    (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
    HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
    ----




  unRAR license restriction
  -------------------------

    The decompression engine for RAR archives was developed using source
    code of unRAR program.
    All copyrights to original unRAR code are owned by Alexander Roshal.

    The license for original unRAR code has the following restriction:

      The unRAR sources cannot be used to re-create the RAR compression algorithm,
      which is proprietary. Distribution of modified unRAR sources in separate form
      or as a part of other software is permitted, provided that it is clearly
      stated in the documentation and source comments that the code may
      not be used to develop a RAR (WinRAR) compatible archiver.


  --
  Igor Pavlov</textarea>
			</div>
		</div>
	</div>
</div>
</div>
</body>
<script>
ts('.tabbed.menu .item').tab();
</script>
</html>