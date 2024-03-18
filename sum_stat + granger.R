########################################################################
#Описательные статистики
########################################################################
sum_stat <- sumtable(df, summ = c( 'notNA(x)',
                                   'max(x)',
                                   'min(x)',
                                   'mean(x)',
                                   'median(x)',
                                   'sd(x)'),
                     summ.names = c('N',
                                    'Max',
                                    'Min',
                                    'Mean',
                                    'Median',
                                    'Sd'),
                     col.align = 'center', out = "kable", simple.kable = TRUE) %>%
  kableExtra::kable_styling(html_font = 'Comic Sans MS')
sum_stat

########################################################################
#тест Грейнджера
########################################################################
y_min <- d$y_min
d_min <- d$d_min
grangertest(y_min ~ d_min, order = 3, data = d) #является
grangertest(d_min ~ y_min, order = 3, data = d) #не является

y_min <- d$y_min
d_min_adj <- d$d_min_adj
grangertest(y_min ~ d_min_adj, order = 3, data = d) #является
grangertest(d_min_adj ~ y_min, order = 3, data = d) #не является

y_man <- d$y_man
d_man <- d$d_man
grangertest(y_man ~ d_man, order = 3, data = d) #является
grangertest(d_man ~ y_man, order = 3, data = d) #не является

y_en <- d$y_en
d_en <- d$d_en
grangertest(y_en ~ d_en, order = 3, data = d) #является
grangertest(d_en ~ y_en, order = 3, data = d) #не является

y_agr <- d$y_agr
d_agr <- d$d_agr
grangertest(y_agr ~ d_agr, order = 3, data = d) #является
grangertest(d_agr ~ y_agr, order = 3, data = d) #не является

y_con <- d$y_con
d_con <- d$d_con
grangertest(y_con ~ d_con, order = 3, data = d) #является
grangertest(d_con ~ y_con, order = 3, data = d) #не является

y_tr <- d$y_tr
d_tr <- d$d_tr
grangertest(y_tr ~ d_tr, order = 3, data = d) #является
grangertest(d_tr ~ y_tr, order = 3, data = d) #не является

y_sail <- d$y_sail
d_sail <- d$d_sail
grangertest(y_sail ~ d_sail, order = 3, data = d) #является
grangertest(d_sail ~ y_sail, order = 3, data = d) #не является


