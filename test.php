<?
      chartdata = initChartdata(datetimes);
      chartdata = addChartdata(chartdata, "V_ac_40k", "DarkKhaki", data_obj.map(x => x["V_ac_40k"]));
      showChart(chartdata, "chart-container-small");
      showChart(chartdata, "chart-container-small");
?>