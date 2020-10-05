<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Year Date</title>
</head>

<body>


<table width="400px" border="0" align="center">
             	<tr>
                	<td align="right">Student ID</td>
                    <td align="center" width="30px" height="40px">&brvbar;&brvbar;</td>
                    <td><input type="text" name="identi" id="identi"></td>
                </tr>
                <tr>
                	<td align="right">Date of birth: </td>
                    <td align="center" width="30px" height="40px">&brvbar;&brvbar;</td>
                    <td>
                    	<select name="day">
                        	<option selected="selected">Day</option>
                            <?php  
								for ($i=1; $i<=31; $i++)
								{
									echo "<option>$i</option><br/>";
								}
							?>
                        </select>
                        -
                        <select name="month">
                            <option selected="selected">Month</option>
                            
                            <?php  
								for ($i=1; $i<=12; $i++)
								{
									if($i=1)
									{
										echo "<option value='$i'>January</option><br/>";
									}
										elseif($i=2)
										{
											echo "<option value='$i'>February</option><br/>";
										}
											elseif($i=3)
											{
												echo "<option value='$i'>March</option><br/>";
											}
												elseif($i=4)
												{
													echo "<option value='$i'>April</option><br/>";
												}
													elseif($i=5)
													{
														echo "<option value='$i'>May</option><br/>";
													}
														elseif($i=6)
														{
															echo "<option value='$i'>June</option><br/>";
														}
															elseif($i=7)
															{
																echo "<option value='$i'>July</option><br/>";
															}
																elseif($i=8)
																{
																	echo "<option value='$i'>August</option><br/>";
																}
																	elseif($i=9)
																	{
																		echo "<option value='$i'>September</option><br/>";
																	}
																		elseif($i=10)
																		{
																			echo "<option value='$i'>October</option><br/>";
																		}
																			elseif($i=11)
																			{
																				echo "<option value='$i'>Nobember</option><br/>";
																			}
								
																				elseif($i=12)
																				{
																					echo "<option value='$i'>December</option><br/>";
																				}
								
								}
							?>
                        </select>
                        -
                        <select name="year">
    						<option selected="selected">Year</option>
    						<?php $startYear = 1970; $currentYear = date('Y'); $currentYear18 = $currentYear-18;
								for ($i=$startYear; $i<=$currentYear18; $i++)
								{
									echo "<option>$i</option><br/>";
								}
							?>
						</select> 
                    </td>
                </tr>
                <tr>
                	<td align="center" colspan="3" height="15px"></td>
                </tr>
                <tr>
                	<td align="right" colspan="2"><input type="reset"></td>
                    <td align="center"><input type="submit" name="Search_data" value="Search"></td>
                </tr>
 
       		</form>


</body>
</html>