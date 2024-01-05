<?
      chartdata = initChartdata(datetimes);
      chartdata = addChartdata(chartdata, "V_ac_20k", "PaleGoldenrod", data_obj.map(x => x["V_ac_20k"]));
      chartdata = addChartdata(chartdata, "V_ac_40k", "DarkKhaki", data_obj.map(x => x["V_ac_40k"]));
      showChart(chartdata, "chart-container-small");
?>